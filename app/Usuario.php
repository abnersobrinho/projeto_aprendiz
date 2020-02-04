<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\CanResetPassword;
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
        'termos',
        'nomecompleto',
        'nome',
        'email',
        'celular',
        'cpf',
        'endereco',
        'sexo',
        'cidade_id',
        'bairro',
        'tel_fixo',
        'igreja_id',
        'dtnasc',
        'responsavel',
        'avatar',
        'senha',
        'sobre',
        'idade',
        'ativo',
        'toca',
        'role_id'
    ];

    protected $hidden = [
        'senha', 'remember_token',
    ];


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

    public function instrumento()
    {
        return $this->belongsTo('App\Instrumento','instrumento_id');
    }

    public function cursos()
    {
        return $this->belongsToMany('App\Cursos','curso_monitor', 'curso_id', 'monitor_id');
    }

    public function igrejas()
    {
        return $this->belongsToMany('App\Igreja','igreja_pastor', 'igreja_id', 'pastor_id');
    }

    public function turmas()
    {
        return $this->hasMany('App\Turma','usuario_id');
    }

    public function files()
    {
        return $this->hasMany('App\File','usuario_id');
    }
}
