<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Mautab\Manager\Access\PermissionsRole;

class Roles extends Model
{

    use PermissionsRole;

    protected static $usersModel = User::class;

    protected $table = 'roles';

    protected $fillable = [
        'name',
        'slug',
        'permissions',
    ];

}
