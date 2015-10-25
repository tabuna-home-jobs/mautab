<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Mautab\Manager\Setting\SettingTrait;
use Nicolaslopezj\Searchable\SearchableTrait;

class Setting extends Model
{
    use SettingTrait, Sortable, SearchableTrait;

    protected $table = 'settings';


    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'name' => 5,
            'slug' => 5,
            'value' => 20,
        ],
    ];


    protected $fillable = [
        'name',
        'slug',
        'value',
    ];


}
