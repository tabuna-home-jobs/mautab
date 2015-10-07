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

        //Если админ шлёт пустое сообщение (обычно открыл или закрыл беседу)
        if((strlen($msg['message']) <= 1) && ($msg['complete'] == 1)){
            $msg['message'] = 'Закрыл беседу';
        }elseif((strlen($msg['message']) <= 1) && ($msg['complete'] == 0)){
            $msg['message'] = 'Открыл беседу';
        }

        //Берем юзера
        $user = User::findOrFail($userId);

        $tiket = new Tiket($msg);

        $user->tiket()->save($tiket);


        //Если админ завершил беседу то обновляем эту таблицу
        if ($msg['complete'] == 1) {

            DB::table('tikets')
                ->where('id', $msg['tikets_id'])
                ->update(['complete' => $msg['complete']]);
        //Если админ открыл вновь тему то обновим тикеты на ноль
        }elseif($msg['complete'] == 0){

            DB::table('tikets')
                ->where('id', $msg['tikets_id'])
                ->update(['complete' => $msg['complete']]);
        }


        $Tikets = DB::table('tikets')
            ->select('*', 'tikets.id as tiketid')
            ->leftJoin('users', 'users.id', '=', 'tikets.user_id')
            ->where('tikets.tikets_id', "=", $msg['tikets_id'])
            ->orderBy('tikets.updated_at', 'desc')
            ->first();

        return $Tikets;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $currentTiket = Tiket::with(['subtiket' =>function($query){

            $query->orderBy('id', 'desc');

        }])->findOrFail($id);

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
    public function destroy(Tiket $tiket)
    {
        $tiket->delete();
        return redirect()->route('admin.tikets.index');
    }
}
