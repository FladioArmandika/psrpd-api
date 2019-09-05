<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DiklatTeknis extends Model {
    protected $table = 'diklat_teknis';
    protected $primaryKey = 'id_diklat_teknis';


    protected $fillable = [
        'id_pegawai', 'img_diklat_teknis'
    ];
}
