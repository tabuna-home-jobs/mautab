<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $table = 'block';

    protected $fillable = [
        'type_id',
        'story_id',
    ];

}
