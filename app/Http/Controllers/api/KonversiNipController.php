<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

use App\Model\KonversiNip as KonversiNip;

class KonversiNipController extends Controller {

    public function getAll($idpegawai) {
        $result = KonversiNip::where('id_pegawai', $idpegawai)->firstOrFail();
        return Response::json($result);
        // return "dawd";
    }
}
