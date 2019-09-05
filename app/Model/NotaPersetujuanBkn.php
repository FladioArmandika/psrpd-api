<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class NotaPersetujuanBkn extends Model {
    protected $table = 'nota_persetujuan_bkn';
    protected $primaryKey = 'id_nota_persetujuan_bkn';


    protected $fillable = [
        'id_cpns', 'id_pns', 'img_nota_persetujuan_bkn'
    ];
}
