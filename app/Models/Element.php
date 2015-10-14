<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Element extends Model
{

    protected static $blockModel = Block::class;
    protected static $storyModel = Story::class;
    protected $table = 'element';
    protected $fillable = [
        'block_id',
        'story_id',
        'sort',
    ];
}
