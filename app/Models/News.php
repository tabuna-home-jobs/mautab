<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'keywords',
        'descript',
        'content',
        'slug',
        'preview'
    ];
}
