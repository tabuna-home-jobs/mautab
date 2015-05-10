<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\AuthRequest;
use Sentry;
use Vesta;


class RegistrationController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('auth/register');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(AuthRequest $request)
	{
		// Create the user
		$user = Sentry::createUser(array(
			'nickname'   => $request->nickname,
			'first_name' => $request->name,
			'last_name'  => $request->lastname,
			'email'      => $request->email,
			'package'    => $request->package,
			'password'   => $request->password,
			'activated'  => TRUE,
		));


		$def_package = array(0 => 'starter',
		                     1 => 'professional',
		                     2 => 'enterprice');


		foreach ($def_package as $key => $val) {
			if ($key == $request->package) {
				$data['package'] = $val;
			}
		}

		Vesta::regUser($request->nickname, $request->password, $request->email, 'default', $request->name, $request->lastname);


		// Find the group using the group id
		//$adminGroup = Sentry::findGroupById(1);

		// Assign the group to the user
		//$user->addGroup($adminGroup);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
