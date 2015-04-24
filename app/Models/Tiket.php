<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Tiket
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
	protected $fillable = ['id', 'idu', 'idt', 'title', 'message','complete'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
//	protected $hidden = [''];

}
