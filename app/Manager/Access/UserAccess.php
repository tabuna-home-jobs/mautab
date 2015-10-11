<?php

namespace Mautab\Manager\Access;


use Mautab\Manager\Access\Permissions\PermissibleTrait;


trait UserAccess
{

    use PermissibleTrait;

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
     * @return void
     */
    public static function setRolesModel($rolesModel)
    {
        static::$rolesModel = $rolesModel;
    }

    /**
     * Returns the persistences model.
     *
     * @return string
     */
    public static function getPersistencesModel()
    {
        return static::$persistencesModel;
    }

    /**
     * Sets the persistences model.
     *
     * @param  string $persistencesModel
     * @return void
     */
    public static function setPersistencesModel($persistencesModel)
    {
        static::$persistencesModel = $persistencesModel;
    }

    /**
     * Returns the activations model.
     *
     * @return string
     */
    public static function getActivationsModel()
    {
        return static::$activationsModel;
    }

    /**
     * Sets the activations model.
     *
     * @param  string $activationsModel
     * @return void
     */
    public static function setActivationsModel($activationsModel)
    {
        static::$activationsModel = $activationsModel;
    }

    /**
     * Returns the reminders model.
     *
     * @return string
     */
    public static function getRemindersModel()
    {
        return static::$remindersModel;
    }

    /**
     * Sets the reminders model.
     *
     * @param  string $remindersModel
     * @return void
     */
    public static function setRemindersModel($remindersModel)
    {
        static::$remindersModel = $remindersModel;
    }

    /**
     * Returns the throttling model.
     *
     * @return string
     */
    public static function getThrottlingModel()
    {
        return static::$throttlingModel;
    }

    /**
     * Sets the throttling model.
     *
     * @param  string $throttlingModel
     * @return void
     */
    public static function setThrottlingModel($throttlingModel)
    {
        static::$throttlingModel = $throttlingModel;
    }

    /**
     * Get mutator for the "permissions" attribute.
     *
     * @param  mixed $permissions
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
            if ($role instanceof RoleInterface) {
                return ($instance->getRoleId() === $role->getRoleId());
            }

            if ($instance->getRoleId() == $role || $instance->getRoleSlug() == $role) {
                return true;
            }

            return false;
        });

        return $role !== null;
    }

    public function generatePersistenceCode()
    {
        return str_random(32);
    }

    public function getUserId()
    {
        return $this->getKey();
    }

    public function getPersistableId()
    {
        return $this->getKey();
    }

    public function getPersistableKey()
    {
        return $this->persistableKey;
    }

    public function setPersistableKey($key)
    {
        $this->persistableKey = $key;
    }

    public function setPersistableRelationship($persistableRelationship)
    {
        $this->persistableRelationship = $persistableRelationship;
    }

    public function getPersistableRelationship()
    {
        return $this->persistableRelationship;
    }

    public function getUserLogin()
    {
        return $this->getAttribute($this->getUserLoginName());
    }

    public function getUserLoginName()
    {
        return reset($this->loginNames);
    }

    public function getUserPassword()
    {
        return $this->password;
    }

    public function delete()
    {
        if ($this->exists) {
            $this->activations()->delete();
            $this->persistences()->delete();
            $this->reminders()->delete();
            $this->roles()->detach();
            $this->throttle()->delete();
        }

        parent::delete();
    }

    public function activations()
    {
        return $this->hasMany(static::$activationsModel, 'user_id');
    }

    public function persistences()
    {
        return $this->hasMany(static::$persistencesModel, 'user_id');
    }

    public function reminders()
    {
        return $this->hasMany(static::$remindersModel, 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany(static::$rolesModel, 'role_users', 'user_id', 'role_id')->withTimestamps();
    }

    public function throttle()
    {
        return $this->hasMany(static::$throttlingModel, 'user_id');
    }

    public function __call($method, $parameters)
    {
        $methods = ['hasAccess', 'hasAnyAccess'];

        if (in_array($method, $methods)) {
            $permissions = $this->getPermissionsInstance();
            return call_user_func_array([$permissions, $method], $parameters);
        }

        return parent::__call($method, $parameters);
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
