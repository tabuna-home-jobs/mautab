<?php

namespace Mautab\Http\Controllers\Hosting;

use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Http\Requests\Hosting\InstallCMSRequest;
use Mautab\Jobs\CMS\InstallCMSJob;
use Mautab\Models\CMS;
use Queue;
use Session;
use Vesta;


class CMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Domains = Vesta::listWebDomain();
        $CMSList = CMS::all();

        return view('user.user.cmsInstall', [
            'Domains' => $Domains,
            'CMSList' => $CMSList,
        ]);

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
    public function store(InstallCMSRequest $request)
    {
        /*
        $test = new InstallCMSJob(
            $request->user(),
            $request->domain,
            CMS::findOrFail($request->cms)
        );

        $test->handle();
        dd($test);
        */

        Queue::push(new InstallCMSJob(
            $request->user(),
            $request->domain,
            CMS::findOrFail($request->cms)
        ));

        Session::flash('good', 'Вы успешно начали установку системы, по завершению вы получите email уведомление, обычно установка занимает около 5 минут');
        return redirect()->route('home.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
