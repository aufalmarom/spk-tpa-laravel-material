<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public $table = 'kecamatans';

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
