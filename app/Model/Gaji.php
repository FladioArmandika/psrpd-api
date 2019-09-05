<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Gaji extends Model {
    protected $table = 'gaji';
    protected $primaryKey = 'id_gaji';


    protected $fillable = [
        'id_pegawai', 'img_gaji','jenis','tanggal'
    ];
}
