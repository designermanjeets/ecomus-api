<?php

namespace App\Imports;

use App\Models\Tag;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use App\GraphQL\Exceptions\ExceptionHandler;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class TagImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnError
{
    private $tags = [];
    private $translateFields = ['name','description'];
    public function rules(): array
    {
        return [
            'name' => ['string', 'max:255', Rule::unique('tags')->where('type', 'product')->whereNull('deleted_at')],
            'status' => ['required','min:0','max:1'],
            'type' => ['required','in:post,product']
        ];
    }

    public function customValidationMessages()
    {
        return [
            'name.unique' => __('validation.name_already_taken'),
            'type.in' => __('validation.tag_type'),
            'status.required' => __('validation.status_field_required'),
        ];
    }

    /**
     * @param \Throwable $e
     */
    public function onError(\Throwable $e)
    {
        throw new ExceptionHandler($e->getMessage() , 422);
    }

    public function getImportedTags()
    {
        return $this->tags;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $row = $this->filterRow($row);
        $tag = new Tag([
            'name' =>  $row['name'],
            'description' =>  $row['description'],
            'type' => $row['type'],
            'status' => $row['status'],
        ]);
        $this->setTranslations($tag,$row);
        $tag->save();
        $tag = $tag->fresh();

        $this->tags[] = [
            'id' => $tag->id,
            'name' =>  $tag->name,
            'description' => $tag->description,
            'type' => $tag->type,
            'status' => $tag->status,
        ];

        return $tag;
    }

    function filterRow($row)
    {
        foreach ($row as $key => $value) {
            $separate = explode('_', $key, 2);
            if(in_array(head($separate),$this->translateFields)) {
                $row[head($separate)][last($separate)] = $value;
            }else{
                $row[$key] = $value;
            }
        }
        return $row;
    }

    function setTranslations($tag, $row)
    {

        foreach ($row as $key => $value) {
            if($tag->isTranslatableAttribute($key)) {
                $tag->setTranslations($key,$value);
            }
        }
        return $tag->save();
    }
}
