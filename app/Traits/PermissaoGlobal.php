<?php

namespace App\Traits;

use App\Models\User;

trait PermissaoGlobal
{
    public function secretariaMunicipal(User $user): bool
    {
        return $user->escola_id === 1 && $user->admin === 1;
    }
}
