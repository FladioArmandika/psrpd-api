<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Kepangkatan extends Model {
    protected $table = 'kepangkatan';
    protected $primaryKey = 'id_kepangkatan';


    protected $fillable = [
        'id_pegawai', 'img_kepangkatan' ,'golongan'
    ];
}
