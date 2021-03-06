<?php namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

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
 * @property float   $sum
 * @property integer $user_id
 * @property string  $w1_id
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereSum($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments whereW1Id($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Payments sortable($default = null)
 */
class Payments extends Model
{

    use Sortable;

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
    protected $fillable = ['sum', 'status', 'user_id', 'w1_id', 'created_at', 'updated_at',];


    protected $sortable = [
        'id',
        'status',
        'created_at',
        'updated_at',
    ];


    public function getUser()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
