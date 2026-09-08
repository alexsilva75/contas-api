<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alerta extends Model
{
    //

    public function conta(){
        return $this->belongsTo(Conta::class);
    }
}
