<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Mautab\Services\Manager\Access\RoleAccess;

/**
 * Mautab\Models\Roles
 *
 * @property integer        $id
 * @property string         $name
 * @property string         $permissions
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string         $slug
 * @property-read \Illuminate\Database\Eloquent\Collection|\static::$usersModel[] $users
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Roles whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Roles whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Roles wherePermissions($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Roles whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Roles whereSlug($value)
 */
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

    protected $casts = [
        //   'permissions' => 'array',
    ];



}
