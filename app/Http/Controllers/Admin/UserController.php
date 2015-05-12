<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Sentry;
use Session;

class UserController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Users = User::paginate(15);

		return view('admin/users', ['Users' => $Users]);
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
	public function store()
	{
		//
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
		$User = Sentry::findUserById($id);

		return view('admin/usersEdit', ['user' => $User]);
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
	public function destroy(UserRequest $request)
	{
		try {
			// Find the user using the user id
			$user = Sentry::findUserById($request->id);

			// Delete the user
			$user->delete();

			Session::flash('good', 'Вы удалили пользователя.');

			return redirect()->route('admin.users.index');
		} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
			echo 'User was not found.';
		}
	}

}