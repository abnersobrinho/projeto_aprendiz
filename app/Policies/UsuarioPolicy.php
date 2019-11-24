<?php

namespace App\Policies;

use App\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class UsuarioPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any usuarios.
     *
     * @param  \App\Usuario  $user
     * @return mixed
     */
    public function viewAny(Usuario $user)
    {
        //
    }

    /**
     * Determine whether the user can view the usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function view(Usuario $user, Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can create usuarios.
     *
     * @param  \App\Usuario  $user
     * @return mixed
     */
    public function create(Usuario $user)
    {
        //
    }

    /**
     * Determine whether the user can update the usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
    *   1. Admin
        2. Aluno

     */
    public function update(Usuario $user)
    {
        return $user->role_id === 1; //admin
    }

    /**
     * Determine whether the user can delete the usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function delete(Usuario $user, Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can restore the usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function restore(Usuario $user, Usuario $usuario)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the usuario.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Usuario  $usuario
     * @return mixed
     */
    public function forceDelete(Usuario $user, Usuario $usuario)
    {
        //
    }
}
