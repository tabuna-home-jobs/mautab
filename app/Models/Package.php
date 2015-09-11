<?php namespace Mautab\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Mautab\Models\Tariff
 *
 * @property integer $id
 * @property string $name
 * @property float $price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tariff whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tariff whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tariff wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tariff whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Tariff whereUpdatedAt($value)
 */
class Package extends Model
{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'packages';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name',
		'price',
		'WebDomains',
		'WebAliases',
		'DNSDomains',
		'DNSAliases',
		'DNSRecords',
		'MailDomains',
		'MailAccounts',
		'Databases',
		'CronJobs',
		'Backups',
		'Quota',
		'Bandwidth',
		'SSHAccess',
		'Recommended',
		'Hidden'
	];


	protected $casts = [
		'SSHAccess' => 'boolean',
	];

	public function getUsers()
	{
		return $this->hasMany(User::class);
	}

}
