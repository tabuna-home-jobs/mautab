<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

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
        return $this->hasMany(Category::class);
    }

    /**
     * Отношение, что категория имеет родительскую категорию
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parent()
    {
        return $this->belongsTo(Category::class);
    }


    public function getSub()
    {

    }

    public function getParent()
    {

    }


}