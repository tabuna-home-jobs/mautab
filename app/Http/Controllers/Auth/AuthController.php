<?php
namespace Mautab\Http\Controllers\Auth;

use Config;
use Crypt;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Mautab\Events\Registration;
use Mautab\Http\Controllers\Controller;
use Mautab\Models\User;
use Validator;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {


        return Validator::make($data, [
            'nickname' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = new User([
            'nickname' => $data['nickname'],
            'first_name' => $data['firstname'],
            'last_name' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'server' => (string)Config::get('vesta.primary'),
        ]);

        $user->nickname = $data['nickname'];
        $user->first_name = $data['firstname'];
        $user->last_name = $data['lastname'];
        $user->server = (string)Config::get('vesta.primary');
        $user->balans = 500;
        $user->encrypt_password = Crypt::encrypt($data['password']);

        event(new Registration($user));
        return $user;
    }
}