<?php namespace Mautab\Manager\Access\Permissions;

trait PermissibleTrait
{
    /**
     * The permissions instance class name.
     *
     * @var string
     */
    protected static $permissionsClass = StrictPermissions::class;
    /**
     * The cached permissions instance for the given user.
     *
     * @var \Cartalyst\Sentinel\Permissions\PermissionsInterface
     */
    protected $permissionsInstance;

    /**
     * Returns the permissions class name.
     *
     * @return string
     */
    public static function getPermissionsClass()
    {
        return static::$permissionsClass;
    }

    /**
     * Sets the permissions class name.
     *
     * @param  string $permissionsClass
     * @return void
     */
    public static function setPermissionsClass($permissionsClass)
    {
        static::$permissionsClass = $permissionsClass;
    }

    /**
     * Returns the permissions.
     *
     * @return array
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Sets permissions.
     *
     * @param  array $permissions
     * @return void
     */
    public function setPermissions(array $permissions)
    {
        $this->permissions = $permissions;
    }

    /**
     * {@inheritDoc}
     */
    public function getPermissionsInstance()
    {
        if ($this->permissionsInstance === null) {
            $this->permissionsInstance = $this->createPermissions();
        }

        return $this->permissionsInstance;
    }

    /**
     * Creates the permissions object.
     *
     * @return \Cartalyst\Sentinel\Permissions\PermissionsInterface
     */
    abstract protected function createPermissions();

    /**
     * {@inheritDoc}
     */
    public function updatePermission($permission, $value = true, $create = false)
    {
        if (array_key_exists($permission, $this->permissions)) {
            $permissions = $this->permissions;

            $permissions[$permission] = $value;

            $this->permissions = $permissions;
        } elseif ($create) {
            $this->addPermission($permission, $value);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function addPermission($permission, $value = true)
    {
        if (!array_key_exists($permission, $this->permissions)) {
            $this->permissions = array_merge($this->permissions, [$permission => $value]);
        }

        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function removePermission($permission)
    {
        if (array_key_exists($permission, $this->permissions)) {
            $permissions = $this->permissions;

            unset($permissions[$permission]);

            $this->permissions = $permissions;
        }

        return $this;
    }
}
