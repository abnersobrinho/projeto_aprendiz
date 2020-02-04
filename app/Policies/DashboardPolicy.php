<?php

namespace App\Policies;

use App\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class DashboardPolicy
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
        return $user->role_id === 1; //admin
        return $user->role_id === 4; //coord
    }
}
