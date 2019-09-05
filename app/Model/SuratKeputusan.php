<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class SuratKeputusan extends Model {
    protected $table = 'surat_keputusan';
    protected $primaryKey = 'id_surat_keputusan';


    protected $fillable = [
        'id_cpns', 'id_pns', 'img_surat_keputusan'
    ];
}
