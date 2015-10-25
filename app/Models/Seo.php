<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected static $storyModel = Story::class;
    protected $table = 'seo';
    protected $fillable = [
        'title',
        'descriptions',
        'keywords',
    ];
}
