<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Type extends Model
{
    use Sortable;

    protected $table = 'tag';

    protected $fillable = [
        'name',
        'slug',
        'is_block'
    ];

    protected $casts = [
        'is_block' => 'boolean',
    ];


}
