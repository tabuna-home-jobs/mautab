<?php

namespace Mautab\Manager\Access;


trait PermissionsUser
{


    public static function getRolesModel()
    {
        return static::$rolesModel;
    }

    public static function setRolesModel($rolesModel)
    {
        static::$rolesModel = $rolesModel;
    }

    public function roles()
    {
        return $this->belongsToMany(static::$rolesModel, 'role_users', 'user_id', 'role_id')->withTimestamps();
    }

    public function getPermissionsAttribute($permissions)
    {
        return $permissions ? json_decode($permissions, true) : [];
    }

    public function setPermissionsAttribute(array $permissions)
    {
        $this->attributes['permissions'] = $permissions ? json_encode($permissions) : '';
    }

    public function getRoles()
    {
        return $this->roles;
    }


}
