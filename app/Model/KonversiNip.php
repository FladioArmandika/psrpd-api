<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class KonversiNip extends Model {
    protected $table = 'konversi_nip';
    protected $primaryKey = 'id_konversi_nip';


    protected $fillable = [
        'id_pegawai', 'img_konversi_nip'
    ];

}
