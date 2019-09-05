<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class AlihTugasJabatan extends Model {
    protected $table = 'alih_tugas_jabatan';
    protected $primaryKey = 'id_alih_tugas_jabatan';


    protected $fillable = [
        'id_pegawai', 'img_konversi_nip'
    ];
}
