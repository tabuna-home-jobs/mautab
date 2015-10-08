<?php namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Mautab\Models\Tiket
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $tikets_id
 * @property string $title
 * @property string $message
 * @property boolean $complete
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * @property-read \Mautab\Models\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\Mautab\Models\Tiket[] $subtiket
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tiket whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tiket whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tiket whereTiketsId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tiket whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tiket whereMessage($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tiket whereComplete($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tiket whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tiket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tiket whereDeletedAt($value)
 */
class Tiket extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tikets';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'user_id', 'tikets_id', 'title', 'message', 'complete'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function subtiket()
	{
		return $this->hasMany(Tiket::class, 'tikets_id');
	}


}
