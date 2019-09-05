<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model {
    protected $table = 'penghargaan';
    protected $primaryKey = 'id_penghargaan';


    protected $fillable = [
        'id_pegawai', 'img_penghargaan', 'jenis', 'tahun'
    ];
}
