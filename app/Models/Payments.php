<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Payments extends Model {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'payments';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'iduser', 'price', 'idpack', 'descr','goods', 'result'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
//	protected $hidden = [''];

}