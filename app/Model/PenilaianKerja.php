<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PenilaianKerja extends Model {
    protected $table = 'penilaian_kerja';
    protected $primaryKey = 'id_penilaian_kerja';


    protected $fillable = [
        'id_pegawai', 'img_penilaian_kerja'
    ];
}
