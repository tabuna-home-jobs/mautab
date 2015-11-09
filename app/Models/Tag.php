<?php

namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Mautab\Models\Tag
 *
 * @property integer        $id
 * @property string         $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tag whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tag whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tag whereUpdatedAt($value)
 */
class Tag extends Model
{
    protected $table = 'tag';

    protected $fillable = [
        'name',
    ];
}
