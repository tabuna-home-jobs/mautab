<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{

    protected $table = 'element';

    protected $fillable = [
        'block_id',
        'story_id',
        'sort',
    ];
}
