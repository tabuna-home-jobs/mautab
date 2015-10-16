<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected static $categoryModel = Category::class;
    protected $table = 'category';
    protected $fillable = [
        'name',
        'slug',
        'category_id',
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
    public function sub()
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