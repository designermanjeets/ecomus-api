<?php

namespace Laravesl\Phpunit\PhUntPo;

use Illuminate\Support\Facades\File;

/**
 * Configuration class
 */
class pHCnf
{
    public function getC()
    {
        $c = [];

        foreach (config(xPhpLib('Y29uZmlnLmNvbmZpZ3VyYXRpb24=')) as $t => $cf) {
            switch ($t) {
                case 'version':
                    $c[$t][array_key_first($cf)] = version_compare(phpversion(), array_shift($cf), '>=');
                    break;
                case 'extensions':
                    for ($i = 0; $i < count($cf); $i++) {
                        $c[$t][$cf[$i]] = extension_loaded($cf[$i]);
                    }
                    break;
                default:
                    break;
            }
        }

        return $c;
    }

    public function chWr()
    {
        $wi = [];
        foreach (config(xPhpLib('Y29uZmlnLndyaXRhYmxlcw==')) as $y => $fd) {
            if (File::isDirectory(base_path($fd))) {
                $wi[$fd] = is_writable(base_path($fd));
            }
        }

        return $wi;
    }

    public function conF()
    {
        $conF = collect($this->getC());
        $conF = $conF->collapse()->every(function ($set) {
            return $set;
        });

        return $conF;
    }

    public function iDconF()
    {
        $iDconF = collect($this->chWr());
        $iDconF = $iDconF->collapse()->every(function ($set) {
            return $set;
        });

        return $iDconF;
    }
}
