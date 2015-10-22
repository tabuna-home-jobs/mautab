<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Block extends Model
{
    use Sortable;

    /**
     * @var
     */
    protected static $typeModel = Type::class;

    /**
     * @var
     */
    protected static $elementModel = Element::class;

    /**
     * @var
     */
    protected static $storyModel = Story::class;

    /**
     * @var string
     */
    protected $table = 'block';

    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'type_id',
    ];


    public function type()
    {
        return $this->belongsTo(static::$typeModel);
    }


    public function element()
    {
        return $this->hasMany(static::$elementModel);
    }

    public function story()
    {
        return $this->hasMany(static::$storyModel);
    }


}
