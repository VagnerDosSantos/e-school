<?php

namespace App\Policies;

use App\Models\Escola;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use App\Traits\PermissaoGlobal;

class EscolaPolicy
{
    use HandlesAuthorization;
    use PermissaoGlobal;
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Escola $escola)
    {
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Escola $escola)
    {
        return $user->escola_id === $escola->codigo_escola;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user)
    {
        return $user->admin === 1
            ? Response::allow()
            : Response::deny('Você não tem permissão para realizar esta ação.');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Escola $escola)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Escola $escola)
    {
        //
    }
}
