<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model {
    protected $table = 'data_diri';
    protected $primaryKey = 'id_data_diri';


    protected $fillable = [
        'id_pegawai', 'img_ktp', 'img_karpeg', 'img_kpe',
        'img_npwp' ,'img_akta_nikah' ,'img_akta_cerai' ,
        'img_kelahiran' ,'img_akta_kematian' ,'img_askes_bpjs' ,
        'img_taspen' ,'img_drh_fip','img_nuptk','img_rekening',
        'img_cuti' ,'img_lainlain'
    ];
}
