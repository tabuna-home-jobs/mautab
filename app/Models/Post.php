<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Mautab\Models\Post
 *
 * @property integer        $id
 * @property string         $slug
 * @property integer        $type_id
 * @property integer        $user_id
 * @property string         $publish
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Post whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Post whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Post whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Post wherePublish($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Post whereDeletedAt($value)
 */
class Post extends Model
{

    protected $table = 'post';

    protected $fillable = [
        'slug',
        'type_id',
        'user_id',
        'publish',
    ];

     protected $dates = ['created_at','updated_at','deleted_at'];
}
