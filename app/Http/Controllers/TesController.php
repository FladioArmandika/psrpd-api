<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller {


    public function getFormPegawai() {
        return view('test/addpegawai');
    }

}
