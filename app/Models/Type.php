<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

/**
 * Mautab\Models\Type
 *
 * @property integer        $id
 * @property string         $name
 * @property string         $slug
 * @property boolean        $is_block
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string         $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\static::$blockModel[] $block
 * @property-read \Illuminate\Database\Eloquent\Collection|\static::$postModel[] $post
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Type whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Type whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Type whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Type whereIsBlock($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Type whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Type whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Type whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Type sortable($default = null)
 */
class Type extends Model
{
    use Sortable;

    protected static $blockModel = Block::class;
    protected static $postModel = Post::class;

    protected $table = 'type';
    protected $fillable = [
        'name',
        'slug',
        'is_block'
    ];

    protected $casts = [
        'is_block' => 'boolean',
    ];


    public function block()
    {
        return $this->hasMany(static::$blockModel);
    }

    public function post()
    {
        return $this->hasMany(static::$postModel);
    }


}
