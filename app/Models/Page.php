<?php namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Mautab\Models\Page
 * @deprecated deprecated since version 2.0
 * @property integer $id
 * @property string $title
 * @property string $name
 * @property string $content
 * @property string $tag
 * @property string $descript
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Page whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Page whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Page whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Page whereContent($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Page whereTag($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Page whereDescript($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Page whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Page whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Page whereDeletedAt($value)
 */
class Page extends Model
{

	use SoftDeletes;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pages';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'name', 'content', 'tag', 'descript', 'slug', 'template'];


}
