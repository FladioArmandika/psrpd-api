<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Cpns extends Model {
    protected $table = 'cpns';
    protected $primaryKey = 'id_cpns';


    protected $fillable = [
        'id_pegawai', 'img_lamaran'
    ];

}
