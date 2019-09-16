<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

use App\Model\Pns as Pns;


class PnsController extends Controller {

    public function getAll($idpegawai) {
        $pns = Pns::where('id_pegawai', $idpegawai)->firstOrFail();
        return Response::json($pns);
    }

    public function getImgBaSumpah($idpegawai) {
        $fileurl = Pns::find($idpegawai, ['img_ba_sumpah']);

        $img =  Storage::get($fileurl->img_ba_sumpah);
        $response = Response::make($img, 200);
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    public function getImgPenambahanMasaKerja($idpegawai) {
        $fileurl = Pns::find($idpegawai, ['img_penambahan_masa_kerja']);

        $img =  Storage::get($fileurl->img_penambahan_masa_kerja);
        $response = Response::make($img, 200);
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    public function add() {
        $model = new Pns;
        $model->id_pegawai = $req->id_pegawai;

        $fileUrl1 = 'public/arsip/'. $model->id_pegawai . '/pns/Ba Sumpah';
        $fileUrl2 = 'public/arsip/'. $model->id_pegawai . '/pns/Penambahan Masa Kerja';

        $path1 = $req->file('img_ba_sumpah')->store($fileUrl);
        $path2 = $req->file('img_penambahan_masa_kerja')->store($fileUrl);

        $model->img_ba_sumpah = $path1;
        $model->img_penambahan_masa_kerja = $path2;


        $model->save();

        return Response::json($model);
    }
}
