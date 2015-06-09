<?php namespace Mautab\Http\Controllers\Admin;

use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Http\Requests\Admin\UserRequest;
use Mautab\Models\User;
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
        $groups = Sentry::findAllGroups();
        $thisgroup = $User->getGroups();

        return view('admin/usersEdit', ['user' => $User, 'groups' => $groups, 'thisgroup' => $thisgroup]);
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
    public function update(UserRequest $request)
	{
		$user = Sentry::getUser();
		$user->email = $request->email;
		$user->first_name = $request->first_name;
		$user->last_name = $request->last_name;

		//Удаление групп
		foreach($user->groups as $groupz){
			$user->removeGroup($groupz);
		}

		//Запись новых групп
		foreach($request->groups as $value){
			$groupz = Sentry::findGroupById($value);
			$user->addGroup($groupz);
		}

		//Запись/обновление отдельных прав пользователя
		if(!is_null($request->permissions)){
			unset($user->permissions);
			$user->permissions = $request->permissions;
		}else{
			unset($user->permissions);
			$user->permissions = array();
		}

		$user->save();
		return redirect()->route('admin.users.index');

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
			$user = Sentry::findUserById($request->id);
			$user->delete();
			Session::flash('good', 'Вы удалили пользователя.');
			return redirect()->route('admin.users.index');
	}

}
