<?php
namespace Mautab\Http\Controllers\Auth;

use Config;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Mautab\Http\Controllers\Controller;
use Mautab\Models\User;
use Validator;
use Vesta;

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
        //dd($data);
        $user = new User([
            'nickname' => $data['nickname'],
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'server' => (string)Config::get('vesta.primary'),
            'role' => serialize(['user']),
        ]);


        $user->nickname = $data['nickname'];
        $user->first_name = $data['firstname'];
        $user->last_name = $data['lastname'];
        $user->server = (string)Config::get('vesta.primary');
        $user->role = serialize(['user']);
        $user->save();

        /*
        $def_package = array(0 => 'starter',
            1 => 'professional',
            2 => 'enterprice');


        foreach ($def_package as $key => $val) {
            if ($key == $request->package) {
                $data['package'] = $val;
            }
        }
*/

        // dd($data['nickname'], $data['password'], $data['email'], 'default', $data['firstname'], $data['lastname']);

        Vesta::regUser($data['nickname'], $data['password'], $data['email'], 'default', $data['firstname'], $data['lastname']);


        return $user;

    }
}