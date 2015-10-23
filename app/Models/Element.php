<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Element extends Model
{

    use Sortable;

    protected static $blockModel = Block::class;
    protected static $storyModel = Story::class;
    protected $table = 'element';
    protected $fillable = [
        'block_id',
        'story_id',
        'sort',
    ];


    protected $searchable = [
        'columns' => [
            'block_id' => 1,
            'story_id' => 1,
        ],
    ];


    public function story()
    {
        return $this->hasMany(static::$storyModel);
    }

}
