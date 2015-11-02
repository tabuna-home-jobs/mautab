<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Type extends Model
{
    use Sortable;

    protected static $blockModel = Block::class;
    protected static $postModel = Post::class;

    protected $table = 'type';
    protected $fillable = [
        'name',
        'slug',
        'is_block'
    ];

    protected $casts = [
        'is_block' => 'boolean',
    ];


    public function block()
    {
        return $this->hasMany(static::$blockModel);
    }

    public function post()
    {
        return $this->hasMany(static::$postModel);
    }


}
