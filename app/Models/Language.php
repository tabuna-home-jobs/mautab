<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Nicolaslopezj\Searchable\SearchableTrait;

class Language extends Model
{
    use Sortable, SearchableTrait;


    protected $table = 'language';


    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'name' => 3,
            'code' => 1,
        ],
    ];


    protected $fillable = [
        'name',
        'code',
        'status',
    ];


    protected $casts = [
        'status' => 'boolean',
    ];


}
