<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    protected $table = 'seo';

    protected $fillable = [
        'title',
        'descriptions',
        'keywords',
    ];
}
