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
 * @property integer        $WebDomains
 * @property integer        $WebAliases
 * @property integer        $DNSDomains
 * @property integer        $DNSRecords
 * @property integer        $MailDomains
 * @property integer        $MailAccounts
 * @property integer        $Databases
 * @property integer        $CronJobs
 * @property integer        $Backups
 * @property integer        $Quota
 * @property integer        $Bandwidth
 * @property boolean        $SSHAccess
 * @property boolean        $Recommended
 * @property boolean        $Hidden
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereWebDomains($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereWebAliases($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereDNSDomains($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereDNSRecords($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereMailDomains($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereMailAccounts($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereDatabases($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereCronJobs($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereBackups($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereQuota($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereBandwidth($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereSSHAccess($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereRecommended($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\Package whereHidden($value)
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
