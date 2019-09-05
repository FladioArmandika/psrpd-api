<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Pns extends Model {
    protected $table = 'pns';
    protected $primaryKey = 'id_pns';


    protected $fillable = [
        'id_pegawai', 'img_ba_sumpah','img_penambahan_masa_kerja'
    ];
}
