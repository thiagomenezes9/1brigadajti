<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = ['nome','bandeira'];

    public function membros(){
        return $this->hasMany('App\User','equipe_id');
    }
}
