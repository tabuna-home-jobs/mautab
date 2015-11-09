<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

/**
 * Mautab\Models\Block
 *
 * @property integer        $id
 * @property integer        $type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string         $slug
 * @property string         $title
 * @property-read \static::$typeModel $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\static::$elementModel[] $element
 * @property-read \Illuminate\Database\Eloquent\Collection|\static::$storyModel[] $story
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Block whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Block whereTypeId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Block whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Block whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Block whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Block whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Block sortable($default = null)
 */
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
