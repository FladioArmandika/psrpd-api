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
    }

    public function getImageLamaran($idpegawai) {
        $fileurl = Cpns::find($idpegawai, ['img_lamaran']);

        $img =  Storage::get($fileurl->img_lamaran);
        $response = Response::make($img, 200);
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    public function add() {
        $model = new Cpns;
        $model->id_pegawai = $req->id_pegawai;

        $fileUrl = 'public/arsip/'. $model->id_pegawai . '/cpns';
        // $path = $req->file('img_profile')->storeAs($fileUrl,$filename);
        $path = $req->file('img_lamaran')->store($fileUrl);

        $model->img_lamaran = $path;

        $model->save();

        return Response::json($model);
    }

}
