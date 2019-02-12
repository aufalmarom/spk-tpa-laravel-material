<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiKlasifikasiKategori extends Model
{
    protected $table = 'nilai_klasifikasi_kategoris';

    public function bobotparameter()
    {
        return $this->belongsTo('App\BobotParameter', 'id_parameter');
    }
}
