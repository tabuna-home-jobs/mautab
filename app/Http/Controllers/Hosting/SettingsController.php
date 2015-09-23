<?php

namespace Mautab\Http\Controllers\Hosting;

use Auth;
use Crypt;
use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Http\Requests\ChangeUserRequest;
use Session;
use Vesta;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $UserInfoLaravel = Auth::User();

        return view('user.user.settings', [
            'UserInfoLaravel' => $UserInfoLaravel
        ]);
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
     * @param  Request $request
     *
     * @return Response
     */
    public function store(Request $request)
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
     * @param  Request $request
     * @param  int $id
     *
     * @return Response
     */
    public function update(ChangeUserRequest $request)
    {
        //Vesta::changeUserPassword($request->password);
        //Vesta::changeUserEmail($request->email);

        //Смена в Laravel
        $thisUser = Auth::User()->fill($request->all());
        $thisUser->password = bcrypt($request->password);
        $thisUser->encrypt_password = Crypt::encrypt($request->password);
        Vesta::changeUserPassword($request->password);

        /*
        $thisUser->password = $request->password;
        $thisUser->email = $request->email;
        $thisUser->lang = $request->lang;
        */
        $thisUser->save();
        Session::flash('good', 'Вы успешно изменили личные данных.');
        return redirect()->route('home.index');
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
