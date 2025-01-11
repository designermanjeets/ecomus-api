<?php

namespace App\Exports;

use App\Enums\RoleEnum;
use App\Models\Product;
use App\Helpers\Helpers;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ProductsExport implements FromQuery, WithMapping, WithHeadings, WithChunkReading, ShouldQueue
{
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        $product = Product::whereNull('deleted_at')->latest('created_at');
        return $this->filter($product, request());
    }

    public function chunkSize(): int
    {
        return 500;
    }

    public function columns(): array
    {
        return [
            "id",
            "name",
            "product_type",
            "short_description",
            "description",
            "type",
            "unit",
            "quantity",
            "weight",
            "price",
            "sale_price",
            "discount",
            "sku",
            "stock_status",
            "meta_title",
            "meta_description",
            "store_id",
            "is_free_shipping",
            "is_featured",
            "is_return",
            "is_trending",
            "is_sale_enable",
            "is_random_related_products",
            "is_external",
            "external_url",
            "external_button_text",
            "shipping_days",
            "sale_starts_at",
            "sale_expired_at",
            "show_stock_quantity",
            "estimated_delivery_text",
            "return_policy_text",
            "safe_checkout",
            "secure_checkout",
            "social_share",
            "encourage_order",
            "encourage_view",
            "is_approved",
            "brand_id",
            "is_digital",
            "is_licensable",
            "preview_url",
            "watermark",
            "watermark_position",
            "wholesale_price_type",
            "is_licensekey_auto",
            "separator",
            'preview_type',
            "created_at",
            "updated_at",
            "deleted_at",
            "status",
            "product_thumbnail_url",
            "product_meta_image_url",
            "size_chart_image_url",
            "watermark_image_url",
            "preview_audio_file_url",
            "preview_video_file_url",
            "product_galleries_url",
            "digital_files_url",
            "attributes",
            "categories",
            "tags",
            "wholesale_prices",
            "license_key",
            "variations"
        ];
    }

    public function map($product): array
    {
        return [
            $product->id,
            $product->name,
            $product->product_type,
            $product->short_description,
            $product->description,
            $product->type,
            $product->unit,
            $product->quantity,
            $product->weight,
            $product->price,
            $product->sale_price,
            $product->discount,
            $product->sku,
            $product->stock_status,
            $product->meta_title,
            $product->meta_description,
            $product->store_id,
            $product->is_free_shipping,
            $product->is_featured,
            $product->is_return,
            $product->is_trending,
            $product->is_sale_enable,
            $product->is_random_related_products,
            $product->is_external,
            $product->external_url,
            $product->external_button_text,
            $product->shipping_days,
            $product->sale_starts_at,
            $product->sale_expired_at,
            $product->show_stock_quantity,
            $product->estimated_delivery_text,
            $product->return_policy_text,
            $product->safe_checkout,
            $product->secure_checkout,
            $product->social_share,
            $product->encourage_order,
            $product->encourage_view,
            $product->is_approved,
            $product->brand_id,
            $product->is_digital,
            $product->is_licensable,
            $product->preview_url,
            $product->watermark,
            $product->watermark_position,
            $product->wholesale_price_type,
            $product->is_licensekey_auto,
            $product->separator,
            $product->preview_type,
            $product->created_at,
            $product->updated_at,
            $product->deleted_at,
            $product->status,
            $product->product_thumbnail?->original_url,
            $product->product_meta_image?->original_url,
            $product->size_chart_image?->original_url,
            $product->watermark_image?->original_url,
            $product->preview_audio_file?->original_url,
            $product->preview_video_file?->original_url,
            $product->product_galleries?->pluck('original_url')->implode(','),
            $product->digital_files?->pluck('original_url')->implode(','),
            $product->attributes->pluck('id')->implode(','),
            $product->categories->pluck('id')->implode(','),
            $product->tags->pluck('id')->implode(','),
            $product->wholesales,
            $product->license_keys->pluck('license_key')->implode(','),
            $this->getVariation($product->variations),
        ];
    }

    public function getVariation($variations)
    {
        $formattedVariations = [];
        foreach ($variations as $variation) {
            $formattedVariations[] = [
                'name' => $variation->name,
                'price' => $variation->price,
                'discount' => $variation->discount ?? 0,
                'stock_status' => $variation->stock_status,
                'sku' => $variation->sku,
                'quantity' => $variation->quantity,
                'variation_image_url' => $variation?->variation_image?->original_url,
                'digital_files_url' =>  $variation?->digital_files?->pluck('original_url')?->implode(','),
                'attribute_values' => $variation?->attribute_values?->pluck('id')?->toArray(),
                'is_licensable' => $variation->is_licensable,
                'is_licensekey_auto' => $variation->is_licensekey_auto,
                'license_key' =>  $variation->license_key?->pluck('license_key')?->implode(','),
                'variation_galleries_url' => $variation?->variation_galleries?->pluck('original_url')?->toArray(),
                'separator' => $variation->separator,
                'status' => $variation->status
            ];
        }

        return $formattedVariations;
    }

    public function headings(): array
    {
        return $this->columns();
    }

    public function filter($product, $request)
    {
        if (Helpers::isUserLogin()) {
            $roleName = Helpers::getCurrentRoleName();
            if ($roleName == RoleEnum::VENDOR) {
                $product = $product->where('store_id', Helpers::getCurrentVendorStoreId());
            }
        }

        if ($request->field && $request->sort) {
            $product = $product->orderBy($request->field, $request->sort);
        }

        if (isset($request->status)) {
            $product = $product->where('status',$request->status);
        }

        if ($request->store_ids) {
            $store_ids = explode(',', $request->store_ids);
            $product = $product->whereIn('store_id', $store_ids);
        }

        if ($request->category_ids) {
            $category_ids = explode(',', $request->category_ids);
            $product = $product->whereRelation('categories', function($categories) use ($category_ids) {
                $categories->WhereIn('category_id', $category_ids);
            });
        }

        if ($request->tag_ids) {
            $tag_ids = explode(',', $request->tag_ids);
            $product = $product->whereRelation('tags', function($tags) use ($tag_ids) {
                $tags->WhereIn('tag_id', $tag_ids);
            });
        }

        if ($request->brand_ids) {
            $brand_ids = explode(',', $request->brand_ids);
            $product = $product->whereRelation('brand', function($brands) use ($brand_ids) {
                $brands->WhereIn('brand_id', $brand_ids);
            });
        }

        if ($request->product_type) {
            $product = $product->where('product_type', $request->product_type);
        }

        return $product;
    }
}
