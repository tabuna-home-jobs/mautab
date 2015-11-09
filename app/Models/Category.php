<?php

namespace Mautab\Models;

use Kalnoy\Nestedset\Node;
use Kyslik\ColumnSortable\Sortable;

/**
 * Mautab\Models\Category
 *
 * @property integer        $id
 * @property string         $name
 * @property string         $slug
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer        $_lft
 * @property integer        $_rgt
 * @property integer        $parent_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\static::$categoryModel[] $children
 * @property-read \static::$categoryModel $parent
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Category whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Category whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Category whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Category whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Category whereLft($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Category whereRgt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Category whereParentId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Category sortable($default = null)
 */
class Category extends Node
{

    use Sortable;

    protected static $categoryModel = Category::class;

    protected $table = 'category';

    protected $fillable = [
        'name',
        'slug',
        'parent_id',
    ];


    /**
     * Берём категорию по Slug
     * @param $slug
     * @return mixed
     */
    public function getSlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }


    /**
     * Отношение, что категория имеет подкатегории
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function children()
    {
        return $this->hasMany(static::$categoryModel);
    }

    /**
     * Отношение, что категория имеет родительскую категорию
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(static::$categoryModel);
    }


}