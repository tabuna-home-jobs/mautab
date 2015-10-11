<?php namespace Mautab\Manager\Access\Permissions;

class StrictPermissions
{
    use PermissionsTrait;

    protected function createPreparedPermissions()
    {
        $prepared = [];

        if (!empty($this->secondaryPermissions)) {
            foreach ($this->secondaryPermissions as $permissions) {
                $this->preparePermissions($prepared, $permissions);
            }
        }

        if (!empty($this->permissions)) {
            $this->preparePermissions($prepared, $this->permissions);
        }

        return $prepared;
    }
}
