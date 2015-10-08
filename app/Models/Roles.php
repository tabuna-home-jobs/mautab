<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{

    protected static $usersModel = User::class;
    protected $table = 'roles';
    protected $fillable = [
        'name',
        'slug',
        'permissions',
    ];

    public static function getUsersModel()
    {
        return static::$usersModel;
    }

    public static function setUsersModel($usersModel)
    {
        static::$usersModel = $usersModel;
    }

    public function users()
    {
        return $this->belongsToMany(static::$usersModel, 'role_users', 'role_id', 'user_id')->withTimestamps();
    }

    public function getPermissionsAttribute($permissions)
    {
        return $permissions ? json_decode($permissions, true) : [];
    }

    public function setPermissionsAttribute(array $permissions)
    {
        $this->attributes['permissions'] = $permissions ? json_encode($permissions) : '';
    }

    public function getRoleId()
    {
        return $this->getKey();
    }

    public function getRoleSlug()
    {
        return $this->slug;
    }

    public function getUsers()
    {
        return $this->users;
    }

    protected function createPermissions()
    {
        return new static::$permissionsClass($this->permissions);
    }
}
