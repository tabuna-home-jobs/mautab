<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Mautab\Models\Story
 *
 * @property integer        $id
 * @property string         $name
 * @property string         $content
 * @property string         $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer        $post_id
 * @property integer        $lang_id
 * @property integer        $seo_id
 * @property integer        $block_id
 * @property integer        $element_id
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story wherePostId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereLangId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereSeoId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereBlockId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Story whereElementId($value)
 */
class Story extends Model
{

    protected static $seoModel = Seo::class;
    protected static $postModel = Post::class;
    protected $table = 'story';
    protected $fillable = [
        'name',
        'content',
        'image',
        'post_id',
        'lang_id',
        'seo_id',
        'block_id',
        'element_id',
    ];
}
