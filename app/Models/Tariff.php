<?php namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tariff';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'price'];


}
