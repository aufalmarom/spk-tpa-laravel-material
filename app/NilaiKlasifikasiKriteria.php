<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiKlasifikasiKriteria extends Model
{
    protected $table = 'nilai_klasifikasi_kriterias';

    public function bobotparameter()
    {
        return $this->belongsTo('App\BobotParameter', 'id_parameter');
    }
}
