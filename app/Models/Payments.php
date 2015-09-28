<?php namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Mautab\Models\Payments
 *
 * @property integer $id
 * @property integer $tariff_id
 * @property integer $count
 * @property float $summa
 * @property integer $users_id
 * @property integer $valute
 * @property boolean $status
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereTariffId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereCount($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereSumma($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereUsersId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereValute($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereUpdatedAt($value)
 */
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
	protected $fillable = ['sum', 'status', 'users_id'];


	public function getUser()
	{
		return $this->belongsTo(User::class);
	}

}
