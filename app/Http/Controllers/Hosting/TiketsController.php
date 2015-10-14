<?php namespace Mautab\Http\Controllers\Hosting;

use Auth;
use DB;
use Flash;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\TiketRequest;
use Mautab\Models\Tiket;
use Mautab\Models\User;

class TiketsController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*
        $this->user = User::class;

        if(Auth::user()->checkRole('admin'))
             abort(404);*/
    }

    public static function storeBySocket($msg, $userId)
    {

        //Декодим массив клиента
        $mess = json_decode($msg, true);

        //Берем юзера
        $user = User::find($userId);

        $tiket = new Tiket([
            'title' => $mess['title'],
            'message' => $mess['message'],
            'complete' => 0
        ]);

        $user->tiket()->save($tiket);


        // $Tikets = Tiket::whereRaw('tikets_id = 0 and user_id = ?', [$user->id])->orderBy('updated_at','desc')->take(1)->get();

        $Tikets = DB::table('tikets')
            ->select('*', 'tikets.id as tiketid')
            ->leftJoin('users', 'users.id', '=', 'tikets.user_id')
            ->orderBy('tikets.updated_at', 'desc')
            ->take(1)
            ->get();

        return $Tikets[0];
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $Tikets = User::find(Auth::User()->id)->tiket()->where('tikets_id', 0)->orderBy('id',
            'desc')->simplePaginate(15);

        return view('user/tikets/index', ['Tikets' => $Tikets]);
    }

    //Новая заявка

    public function store($msg, $userId)
    {
        $msg = json_decode($msg, true);


        //Берем юзера
        $user = User::findOrFail($userId);

        $tiket = new Tiket([
            'message' => $msg['message'],
            'tikets_id' => $msg['tikets_id']
        ]);

        $user->tiket()->save($tiket);


        $Tikets = DB::table('tikets')
            ->select('*', 'tikets.id as tiketid')
            ->leftJoin('users', 'users.id', '=', 'tikets.user_id')
            ->where('tikets.tikets_id', "=", $msg['tikets_id'])
            ->orderBy('tikets.updated_at', 'desc')
            ->take(1)
            ->get();


        return $Tikets[0];
    }

    public function show(Tiket $tiket)
    {
        $currentTiket = $tiket->with([
            'subtiket' => function ($query) {

                $query->orderBy('id', 'desc');

            }
        ])->findOrFail($tiket->id);


        return view('user/tikets/viewer', ['tiket' => $currentTiket]);
    }

    //Ответ
    public function update(TiketRequest $request, $id)
    {

        //Заполнение модели

        $Tiket = User::find(Auth::User()->id)->tiket()->find($id)->subtiket($id);
        $Tiket->save(new Tiket([
            'message' => $request->message,
        ]));
        Flash::success('Вы успешно добавили ответ.');
        return redirect()->back();
    }


}
