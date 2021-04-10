<?php
namespace App\Traits;

use App\Models\Role;

trait HasRolesAndPermissions{
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_users');
    }

    public function hasRole($roles)
    {
        $roles = is_array($roles) ? $roles : explode('|', $roles);

        foreach ($roles as $role) {
            if ($this->roles->contains('slug', $role)) {
                return true;
            }
        }

        return false;

        // dd($role);
        // return $this->roles->contains('slug', $role);
    }

}

