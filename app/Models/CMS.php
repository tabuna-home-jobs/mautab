<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class CMS extends Model
{
    protected $table = 'cms';


    /**
     * @var array
     */
    protected $fillable = [
        'avatar',
        'name',
        'title',
        'keywords',
        'description',
        'content',
        'slug',
        'last_version',
        'web_site',
    ];
}
