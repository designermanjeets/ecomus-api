<?php

namespace Laravesl\Phpunit\PhUntPo;

use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;

class Phut
{
    public function retLe()
    {
        try {

            $fP = __DIR__ . '/../../'.xPhpLib('ZnppcC5saS5kaWM=');
            if (strFlExs($fP)) {
                $jD = file_get_contents($fP);
                if ($jD && isset($jD)) {
                    return Http::post(xPhpLib('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvcmVzZXQvbGljZW5zZQ=='),[
                        xPhpLib('a2V5') => xPhpLib($jD)
                    ]);
                }
            }

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function vl($r)
    {
        try {

            $ls = $r->all();
            if (strPrp()) {
                $rs = Http::post(xPhpLib('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvZW52YXRv'),[
                    xPhpLib('a2V5') => trim($ls[xPhpLib('bGljZW5zZQ==')]),
                    xPhpLib('ZW52YXRvX3VzZXJuYW1l') => $ls[xPhpLib('ZW52YXRvX3VzZXJuYW1l')],
                    xPhpLib('ZG9tYWlu') => str_replace(array(xPhpLib('YmxvY2svbGljZW5zZS92ZXJpZnk='), xPhpLib('aW5zdGFsbC9saWNlbnNl'), xPhpLib('aW5zdGFsbC92ZXJpZnk=')), '', url()->current()),
                    xPhpLib('cHJvamVjdF9pZA==') => env(xPhpLib('QVBQX0lE')),
                    xPhpLib('c2VydmVyX2lw') => $_SERVER[xPhpLib('U0VSVkVSX0FERFI=')] ?? $_SERVER[xPhpLib('UkVNT1RFX0FERFI=')],
                ]);

                if ($rs?->status() == Response::HTTP_OK) {
                    $fP = public_path(xPhpLib('Y2o3a2w4OS50bXA='));
                    if (strFlExs($fP)) {
                        strFilRM($fP);
                    }

                    file_put_contents($fP, bXenPUnt($_SERVER[xPhpLib('U0VSVkVSX0FERFI=')] ?? $_SERVER[xPhpLib('UkVNT1RFX0FERFI=')]));
                }

                return $rs;
            }

        } catch (Exception $e) {

            throw $e;
        }
    }

    public function lg($cnDTyP, $trGLi, $cHtne = null, $dHtne = null)
    {
        try {

            if (strPrp()) {
                $jDm = null;
                $rgLi = null;
                $rIp = null;
                $fP = public_path(xPhpLib('X2xvZy5kaWMueG1s'));
                if (strFlExs($fP)) {
                    $jDm = file_get_contents($fP);
                    if (!is_null($jDm)) {
                        $jDm = xPhpLib($jDm);
                    }
                }

                $fP = public_path(xPhpLib('ZnppcC5saS5kaWM='));
                if (strFlExs($fP)) {
                    $jLi = file_get_contents($fP);
                    if (!is_null($jLi)) {
                        $rgLi = xPhpLib($jLi);
                    }
                }

                $fP = public_path(xPhpLib('Y2o3a2w4OS50bXA='));
                if (strFlExs($fP)) {
                    $jIp = file_get_contents($fP);
                    if (!is_null($jIp)) {
                        $rIp = xPhpLib($jIp);
                    }
                }

                $ul = url()?->current();
                if ($jDm && $rgLi) {
                    return Http::post(xPhpLib('aHR0cHM6Ly9sYXJhdmVsLnBpeGVsc3RyYXAubmV0L3ZlcmlmeS9hcGkvbG9ncw=='),[
                        xPhpLib('a2V5') => $rgLi,
                        xPhpLib('cmVnaXN0ZXJlZF9kb21haW4=') => $dHtne,
                        xPhpLib('cmVxdWVzdGVkX2RvbWFpbg==') =>  $cHtne,
                        xPhpLib('cmVnaXN0ZXJlZF9pcA==') =>  $rIp,
                        xPhpLib('cmVxdWVzdGVkX2lw') => $_SERVER[xPhpLib('U0VSVkVSX0FERFI=')] ?? $_SERVER[xPhpLib('UkVNT1RFX0FERFI=')],
                        xPhpLib('Y29uZGl0aW9uX3R5cGU=') => xPhpLib($cnDTyP),
                        xPhpLib('dHJpZ2dlcmVkX2xpbmU=') => xPhpLib($trGLi),
                    ]);
                }
            }

        } catch (Exception $e) {

            throw $e;
        }
    }
}
