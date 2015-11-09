<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Mautab\Models\Seo
 *
 * @property integer        $id
 * @property string         $title
 * @property string         $descriptions
 * @property string         $keywords
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Seo whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Seo whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Seo whereDescriptions($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Seo whereKeywords($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Seo whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Seo whereUpdatedAt($value)
 */
class Seo extends Model
{
    protected static $storyModel = Story::class;
    protected $table = 'seo';
    protected $fillable = [
        'title',
        'descriptions',
        'keywords',
    ];
}
