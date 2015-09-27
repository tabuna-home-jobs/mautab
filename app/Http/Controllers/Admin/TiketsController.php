<?php

namespace Mautab\Http\Controllers\Admin;

use DB;
use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Models\Tiket;
use Mautab\Models\User;

class TiketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiketsList = Tiket::whereRaw('tikets_id = 0')->orderBy('id', 'desc')->simplePaginate(15);

        return view('admin/tikets/index', ['tiketList' => $tiketsList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store($msg, $userId)
    {
        $msg = json_decode($msg, TRUE);

        //Берем юзера
        $user = User::findOrFail($userId);

        $tiket = new Tiket($msg);

        $user->tiket()->save($tiket);

        //Если админ завершил беседу то обновляем эту таблицу
        if ($msg['complete'] == '1') {

            DB::table('tikets')
                ->where('id', $msg['tikets_id'])
                ->update(['complete' => $msg['complete']]);
        }


        //$Tikets = Tiket::whereRaw('tikets_id = ?', [$msg['tikets_id']])->orderBy('updated_at','desc')->take(1)->get();

        $Tikets = DB::table('tikets')
            ->select('*', 'tikets.id as tiketid')
            ->leftJoin('users', 'users.id', '=', 'tikets.user_id')
            ->where('tikets.tikets_id', "=", $msg['tikets_id'])
            ->orderBy('tikets.updated_at', 'desc')
            ->take(1)
            ->get();

        return $Tikets[0];
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $currentTiket = Tiket::with('subtiket')->findOrFail($id);

        return view('admin/tikets/viewer', ['tiket' => $currentTiket]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
