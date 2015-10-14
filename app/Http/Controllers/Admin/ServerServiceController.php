<?php

namespace Mautab\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Vesta;

class ServerServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {

        if ($request->action == 'start') {
            Vesta::startService($request->serverName, $request->service);
        } elseif ($request->action == 'stop') {
            Vesta::stopService($request->serverName, $request->service);
        } elseif ($request->action == 'restart') {
            Vesta::restartService($request->serverName, $request->service);
        }

        return redirect()->back();
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
     * Store a newly crea   ted resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($server)
    {
        $SystemInfo = Vesta::listSysInfo($server);
        $SystemService = Vesta::listSysService($server);

        return view("admin.server.service", [
            'ServerName' => $server,
            'SystemInfo' => $SystemInfo['sysinfo'],
            'SystemService' => $SystemService,
        ]);

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
