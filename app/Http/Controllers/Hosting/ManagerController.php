<?php

namespace Mautab\Http\Controllers\Hosting;

use Flash;
use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Http\Requests\Hosting\DeleteFileManager;
use Mautab\Http\Requests\Hosting\ShowFileManager;
use Mautab\Http\Requests\Hosting\UpdateFileManager;
use Session;
use Vesta;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(ShowFileManager $request)
    {
        if (!is_null($request->name)) {
            if ($request->name == "../") {
                $Path = Session::pull('Path', '');
                $Path = explode('/', $Path);
                unset($Path[count($Path) - 2]);
                $Path = implode("/", $Path);
                Session::put('Path', $Path);
            } else {
                Session::put('Path', Session::get('Path', '') . $request->name . '/');
            }

        }


        if (!is_null($request->path)) {
            Session::put('Path', $request->path);
        }


        $listDirectory = Vesta::listDirectory(Session::get('Path', ''));


        return view('user.user.manager', [
            'listDirectory' => $listDirectory
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
     * @return Response
     */
    public function show($path, ShowFileManager $request)
    {
        $type = $request->type;


        /*
         * Если отрыта директория
         */

        if ($type == 'd') {
            Session::put('Path', $path . '/');
            $listDirectory = Vesta::listDirectory($path);
            return view('user.user.manager', [
                'listDirectory' => $listDirectory
            ]);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
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
     * @return Response
     */
    public function update(UpdateFileManager $request)
    {
        Vesta::changePermission(Session::get('Path', '') . $request->name, $request->permission);
        Flash::success('Вы успешно изменили права.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(DeleteFileManager $request)
    {

        if ($request->type == "d")
            Vesta::deleteDir(Session::get('Path', '') . $request->name);
        else
            Vesta::deleteFile(Session::get('Path', '') . $request->name);

        Flash::success('Вы успешно удалили файл.');
        return redirect()->route('manager.index', [
            'path' => Session::get('Path', '')
        ]);
    }
}
