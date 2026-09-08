<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoConta extends Model
{
    protected $fillable = [
        'nome',
        'descricao'
    ];
    //
    public function contas(){
        return $this->hasMany(Conta::class);
    }
}
