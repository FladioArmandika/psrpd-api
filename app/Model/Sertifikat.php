<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Sertifikat extends Model {
    protected $table = 'sertifikat';
    protected $primaryKey = 'id_sertifikat';


    protected $fillable = [
        'id_pegawai', 'img_sertifikat', 'jenis'
    ];
}
