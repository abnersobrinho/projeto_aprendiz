<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cpf', 'email', 'senha', 'endereco', 'bairro', 'tel_fixo', 
        'celular', 'responsavel', 'dtnasc', 'idade'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'senha', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function cidade()
    {
        return $this->belongsTo('App\Cidade','cidade_id');
    }

    public function role()
    {
        return $this->belongsTo('App\Role','role_id');
    }

    public function igreja()
    {
        return $this->belongsTo('App\Igreja','igreja_id');
    }

        public function eventos()
    {
        return $this->hasMany('App\Evento','usuario_id');
    }

}
