<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Nicolaslopezj\Searchable\SearchableTrait;

/**
 * Mautab\Models\Language
 *
 * @property integer        $id
 * @property string         $name
 * @property string         $code
 * @property boolean        $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Language whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Language whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Language whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Language whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Language whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Language whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Language sortable($default = null)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Language search($search, $threshold = null, $entireText = false)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Language searchRestricted($search, $restriction, $threshold = null, $entireText = false)
 */
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
