<?php

namespace Mautab\Models;

use App;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use Nicolaslopezj\Searchable\SearchableTrait;

/**
 * Mautab\Models\Element
 *
 * @property integer        $id
 * @property integer        $block_id
 * @property integer        $sort
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string         $deleted_at
 * @property string         $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\static::$storyModel[] $story
 * @property-read \Illuminate\Database\Eloquent\Collection|\static::$storyModel[] $storyLang
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element whereBlockId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element whereSort($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element sortable($default = null)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element search($search, $threshold = null, $entireText = false)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Element searchRestricted($search, $restriction, $threshold = null, $entireText = false)
 */
class Element extends Model
{

    use Sortable, SearchableTrait;

    protected static $blockModel = Block::class;

    protected static $storyModel = Story::class;

    protected $table = 'element';

    protected $fillable = [
        'block_id',
        'name',
        'sort',
    ];


    protected $sortable = [
        'name',
        'sort',
        'created_at',
        'updated_at',
    ];


    protected $searchable = [
        'columns' => [
            'name' => 4,
        ],
    ];


    public function story()
    {
        return $this->hasMany(static::$storyModel);
    }


    public function storyLang()
    {
        $langId = Language::where('code', App::getLocale())->firstOrFail()->id;

        return $this->hasOne(static::$storyModel)
            ->where('lang_id', $langId);
    }

}
