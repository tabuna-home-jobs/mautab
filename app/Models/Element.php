<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Element extends Model
{

    use Sortable, SearchableTrait;

    protected static $blockModel = Block::class;

    protected static $storyModel = Story::class;

    protected $table = 'element';

    protected $fillable = [
        'block_id',
        'name',
        'sort',
    ];


    protected $sortable = [
        'name',
        'sort',
        'created_at',
        'updated_at',
    ];


    protected $searchable = [
        'columns' => [
            'name' => 4,
        ],
    ];


    public function story()
    {
        return $this->hasMany(static::$storyModel);
    }

}
