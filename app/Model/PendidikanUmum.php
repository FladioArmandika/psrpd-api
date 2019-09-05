<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PendidikanUmum extends Model {
    protected $table = 'pendidikan_umum';
    protected $primaryKey = 'id_pendidikan_umum';


    protected $fillable = [
        'id_pegawai', 'img_pendidikan_umum', 'tingkat'
    ];
}
