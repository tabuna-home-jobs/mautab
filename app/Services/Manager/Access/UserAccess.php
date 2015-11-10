<?php namespace Mautab\Services\Manager\Access;

trait UserAccess
{

    /**
     * Returns the roles model.
     *
     * @return string
     */
    public static function getRolesModel()
    {
        return static::$rolesModel;
    }

    /**
     * Sets the roles model.
     *
     * @param  string $rolesModel
     *
     * @return void
     */
    public static function setRolesModel($rolesModel)
    {
        static::$rolesModel = $rolesModel;
    }

    /**
     * Get mutator for the "permissions" attribute.
     *
     * @param  mixed $permissions
     *
     * @return array
     */
    public function getPermissionsAttribute($permissions)
    {
        return $permissions ? json_decode($permissions, true) : [];
    }

    /**
     * Set mutator for the "permissions" attribute.
     *
     * @param  mixed $permissions
     *
     * @return void
     */
    public function setPermissionsAttribute(array $permissions)
    {
        $this->attributes['permissions'] = $permissions ? json_encode($permissions) : '';
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function inRole($role)
    {
        $role = array_first($this->roles, function ($index, $instance) use ($role) {

            if ($instance->getRoleId() == $role || $instance->getRoleSlug() == $role) {
                return true;
            }

            return false;
        });

        return $role !== null;
    }

    public function hasAccess($CheckPermissions)
    {
        $Permissions = $this->roles()->lists('permissions');
        $Permissions->prepend($this->permissions);

        foreach ($Permissions as $Permission) {
            if (isset($Permission[$CheckPermissions]) && $Permission[$CheckPermissions]) {
                return true;
            }
        }

        return false;
    }

    public function roles()
    {
        return $this->belongsToMany(static::$rolesModel, 'role_users', 'user_id', 'role_id')->withTimestamps();
    }

    public function addRole($Role)
    {
        $this->roles()->save($Role);
    }

    protected function createPermissions()
    {
        $userPermissions = $this->permissions;

        $rolePermissions = [];

        foreach ($this->roles as $role) {
            $rolePermissions[] = $role->permissions;
        }

        return new static::$permissionsClass($userPermissions, $rolePermissions);
    }


}
