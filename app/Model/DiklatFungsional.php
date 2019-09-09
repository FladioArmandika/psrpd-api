<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DiklatFungsional extends Model {
    protected $table = 'diklat_fungsional';
    protected $primaryKey = 'id_diklat_fungsional';


    protected $fillable = [
        'id_pegawai', 'img_diklat_teknis'
    ];
}




