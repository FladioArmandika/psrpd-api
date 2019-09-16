<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Storage;

use App\Model\KonversiNip as KonversiNip;

class KonversiNipController extends Controller {

    public function getAll($idpegawai) {
        $result = KonversiNip::where('id_pegawai', $idpegawai)->firstOrFail();
        return Response::json($result);
    }

    public function getImageKonversiNip($idpegawai) {
        $fileurl = KonversiNip::find($idpegawai, ['img_konversi_nip']);

        $img =  Storage::get($fileurl->img_konversi_nip);
        $response = Response::make($img, 200);
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }

    public function add() {
        $konversinip = new \App\Model\KonversiNip;
        $konversinip->id_pegawai = $req->id_pegawai;

        $fileUrl = 'public/arsip/'. $konversinip->img_konversi_nip . '/konversinip';
        // $path = $req->file('img_profile')->storeAs($fileUrl,$filename);
        $path = $req->file('img_konversi_nip')->store($fileUrl);

        $konversinip->img_konversi_nip = $path;

        $konversinip->save();

        return Response::json($konversinip);
    }

}
