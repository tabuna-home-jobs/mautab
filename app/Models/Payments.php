<?php namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{

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
	protected $fillable = ['tariff_id', 'count', 'summa', 'users_id', 'value', 'status'];


}
