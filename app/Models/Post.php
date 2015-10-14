<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

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
