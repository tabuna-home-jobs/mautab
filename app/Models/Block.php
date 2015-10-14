<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected static $typeModel = Type::class;
    protected static $elementModel = Element::class;
    protected $table = 'block';
    protected $fillable = [
        'type_id',
        'story_id',
    ];


}
