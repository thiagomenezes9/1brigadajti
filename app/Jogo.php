<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    protected $fillable = ['data','campo_id','hora','operadores_id','missao','obs' ];

    public function campo(){
        return $this->belongsTo('App\Campo','campo_is');
    }

    public function operadores(){
        return $this->hasMany('App\User','operadores_id');
    }
}
