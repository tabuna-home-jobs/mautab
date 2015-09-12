<?php namespace Mautab\Http\Controllers\Admin;

use Auth;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Http\Requests\Admin\UserRequest;
use Mautab\Models\User;
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

        return view('admin/users/users', ['Users' => $Users]);
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

        $User = User::find($id);

        return view('admin/users/usersEdit', ['user' => $User]);

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
        $user = Auth::User();
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;

        //Удаление групп
        foreach ($user->groups as $groupz) {
            $user->removeGroup($groupz);
        }

        //Запись новых групп
        foreach ($request->groups as $value) {
            $groupz = User::find($value);
            $user->addGroup($groupz);
        }

        //Запись/обновление отдельных прав пользователя
        if (!is_null($request->permissions)) {
            unset($user->permissions);
            $user->permissions = $request->permissions;
        } else {
            unset($user->permissions);
            $user->permissions = [];
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
        $user = User::find($request->id);
        $user->delete();
        Session::flash('good', 'Вы удалили пользователя.');
        return redirect()->route('admin.users.index');
    }

}
