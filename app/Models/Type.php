<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'tag';

    protected $fillable = [
        'name',
        'slug',
        'is_block'
    ];

    protected $casts = [
        'is_block' => 'boolean',
    ];


}
