<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataAlternatif extends Model
{
    protected $table = 'data_alternatifs';

    public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan', 'id_kecamatan');
    }
}
