<?php namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Mautab\Models\Tiket
 *
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
//	protected $hidden = [''];

	public function user()
	{
		return $this->belongsTo('Mautab\Models\User');
	}

	public function subtiket()
	{
		return $this->hasMany('Mautab\Models\Tiket', 'tikets_id');
	}


}
