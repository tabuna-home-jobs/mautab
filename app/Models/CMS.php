<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Mautab\Models\CMS
 *
 * @property integer        $id
 * @property string         $avatar
 * @property string         $name
 * @property string         $title
 * @property string         $keywords
 * @property string         $description
 * @property string         $content
 * @property string         $slug
 * @property string         $last_version
 * @property string         $web_site
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereAvatar($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereKeywords($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereSlug($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereLastVersion($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereWebSite($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\CMS whereUpdatedAt($value)
 */
class CMS extends Model
{
    protected $table = 'cms';


    /**
     * @var array
     */
    protected $fillable = [
        'avatar',
        'name',
        'title',
        'keywords',
        'description',
        'content',
        'slug',
        'last_version',
        'web_site',
    ];
}
