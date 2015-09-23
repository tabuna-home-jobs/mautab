<?php namespace Mautab\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;

/**
 * Mautab\Models\User
 *
 * @property integer $id
 * @property string $nickname
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $end_of_service
 * @property string $server
 * @property float $balans
 * @property integer $package
 * @property string $role
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Mautab\Models\Tiket[] $tiket
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereNickname($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereFirstName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereLastName($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereEndOfService($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereServer($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereBalans($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User wherePackage($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereRole($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Mautab\Models\User whereUpdatedAt($value)
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    protected $guarded = [
        'nickname',
        'first_name',
        'last_name',
        'server',
        'balans',
        'role',
        'suspend',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'lang',
        'package_id',
        'email',
        'password',
        'phone',
        'email_notification',
        'phone_notification',
    ];


    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'encrypt_password'];


    public function tiket()
    {
        return $this->hasMany(Tiket::class);
    }

	public function getNickname(){

		return $this->nickname;
	}


    public function getPayments()
    {
        return $this->hasMany(Payments::class, 'users_id');
    }


    public function getPackage()
    {
        return $this->belongsTo(Package::class, 'package_id');
    }


    public function addddRole($role)
    {


        $thisRole = unserialize($this->role);

        if (is_array($thisRole)) {
            if (!in_array($role, $thisRole))
                array_push($thisRole, $role);
            $this->role = serialize($thisRole);
        } else {
            $this->role = serialize([$role]);
        }
        return $this;
    }


    public function removeRole($role)
    {
        $thisRole = unserialize($this->role);
        if (array_search($role, $thisRole) !== false) {
            $key = array_search($role, $thisRole);
            unset($thisRole[$key]);
            $this->role = serialize($thisRole);
        }
        return $this;
    }


    public function checkRole($role)
    {
        $thisRole = unserialize($this->role);
        if (array_search($role, $thisRole) !== false)
            return true;
        else
            return false;
    }

    public function getRole()
    {
        return unserialize($this->role);
    }


}
