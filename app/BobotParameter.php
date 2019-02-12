<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BobotParameter extends Model
{
    public $table = 'bobot_parameters';

    public function user()
    {
        return $this->belongsTo('App\User', 'created_by');
    }
}
