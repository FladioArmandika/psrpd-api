<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Hukuman extends Model {
    protected $table = 'hukuman';
    protected $primaryKey = 'id_hukuman';


    protected $fillable = [
        'id_pegawai', 'img_hukuman', 'jenis'
    ];
}
