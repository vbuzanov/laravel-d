<?php
namespace App\Traits;

use App\Models\Role;

trait HasRolesAndPermissions{
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_users');
    }

    public function hasRole($role)
    {
        return $this->roles->contains('slug', $role);
    }

}