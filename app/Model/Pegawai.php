<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model {
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';


    protected $fillable = [
        'nip', 'password', 'nama_pegawai', 'img_profile'
    ];


}
