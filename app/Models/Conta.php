<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    //

    

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tipo(){
        return $this->belongsTo(TipoConta::class, 'tipo_conta_id');
    }

    public function alertas(){
        return $this->hasMany(Alerta::class);
    }
}
