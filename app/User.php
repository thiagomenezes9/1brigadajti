<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'email', 'password', 'dt_ent','foto','classe','observacao','nome_guerra','equipe_id',
        'ismedico','isengenheiro','iscomunicador','telefone','pforte','pfraco','perfil','instagran',
        'rg','cpf','sexo', 'arma'
    ];

    public function equipe(){
        return $this->belongsTo('App\Equipe','equipe_id');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
