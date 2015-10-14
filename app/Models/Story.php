<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected static $seoModel = Seo::class;
    protected static $postModel = Post::class;
    protected $table = 'story';
    protected $fillable = [
        'name',
        'content',
        'image',
        'post_id',
        'lang_id',
        'seo_id',
    ];
}
