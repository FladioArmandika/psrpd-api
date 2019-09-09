<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Storage;

use App\Model\Pegawai as Pegawai;


class PegawaiController extends Controller {

    public function getAll() {

        $listpegawai = Pegawai::all();
        return Response::json($listpegawai);
        // $img =  Storage::get('d.png');
        // $response = Response::make($img, 200);
        // $response->header('Content-Type', 'image/jpeg');

        // return $response;
    }

    public function addPegawai(Request $req) {
        $pegawai = new \App\Model\Pegawai;
        $pegawai->nip = $req->nip;
        $pegawai->password = $req->password;
        $pegawai->nama_pegawai = $req['nama_pegawai'];

        $filename = 'imgprofile';
        $fileUrl = 'public/arsip/'.$pegawai->nip . '/profile';
        // $path = $req->file('img_profile')->storeAs($fileUrl,$filename);
        $path = $req->file('img_profile')->store($fileUrl);

        $pegawai->img_profile = $path;

        $pegawai->save();

        return Response::json($pegawai);

    }

    public function getPegawai($idpegawai) {
        // $pegawai = Pegawai::find($idpegawai);
        $pegawai = Pegawai::where('nip', $idpegawai)->first();

        return Response::json($pegawai);
    }

    public function deletePegawai($idpegawai) {
        $res = User::where('id',$id)->delete();
    }


}
