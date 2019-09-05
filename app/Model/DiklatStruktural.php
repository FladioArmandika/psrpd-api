<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DiklatStruktural extends Model {
    protected $table = 'diklat_struktural';
    protected $primaryKey = 'id_diklat_struktural';


    protected $fillable = [
        'id_pegawai', 'img_diklat_struktural', 'kategori'
    ];
}
