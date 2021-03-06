<?php namespace Mautab\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\Admin\UserRequest;
use Mautab\Models\Package;
use Mautab\Models\Roles;
use Mautab\Models\User;
use Session;
use Vesta;


class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     * @param Requests $requests
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $Users = User::search($request->search)->sortable()->paginate(15);
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
    public function show($User)
    {
        $InfoUserVesta = Vesta::adminListUserAccount($User);
        $InfoPackagesVesta = Vesta::adminListUserPackages($User);
        $InfoSSHVesta = Vesta::adminListUserShell($User);
        $packages = Package::all();

        $Roles = Roles::all();

        return view('admin/users/usersEdit', [
            'user' => $User,
            'packages' => $packages,
            'Roles' => $Roles,
        ]);
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
    public function update(UserRequest $request, User $user)
    {
        $user->email = $request->email;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->permissions = [];
        $user->permissions = $request->permissions;

        $user->save();
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy(UserRequest $request, User $user)
    {
        $user->delete();
        Session::flash('good', 'Вы удалили пользователя.');
        return redirect()->route('admin.users.index');
    }

}
