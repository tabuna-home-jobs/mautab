<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Mautab\Services\Manager\Setting\SettingTrait;
use Nicolaslopezj\Searchable\SearchableTrait;

/**
 * Mautab\Models\Setting
 *
 * @property integer        $id
 * @property string         $name
 * @property string         $slug
 * @property string         $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Setting whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Setting whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Setting whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Setting whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Setting sortable($default = null)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Setting search($search, $threshold = null, $entireText = false)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Setting searchRestricted($search, $restriction, $threshold = null, $entireText = false)
 */
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
