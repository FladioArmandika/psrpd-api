<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

use App\Model\Cpns as Cpns;

class CpnsController extends Controller {

    public function getAll($idpegawai) {
        $cpns = Cpns::where('id_pegawai', $idpegawai)->firstOrFail();
        return Response::json($cpns);
        // return "dawd";
    }

}
