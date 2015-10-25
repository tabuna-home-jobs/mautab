<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Mautab\Manager\Access\RoleAccess;

class Roles extends Model
{

    use RoleAccess;

    protected static $usersModel = User::class;

    protected $table = 'roles';

    protected $fillable = [
        'id',
        'name',
        'slug',
        'permissions',
    ];

}
