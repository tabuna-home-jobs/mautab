<?php namespace Mautab\Http\Controllers\Hosting;

use Flash;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\CronDeleteRequest;
use Mautab\Http\Requests\CronRequest;
use Vesta;

class CronController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('user/cron/index', [
            'CronList' => Vesta::listCron()
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
     * @return Response
     */
    public function store(CronRequest $request)
    {
        Vesta::addCron(
            $request->v_min,
            $request->v_hour,
            $request->v_day,
            $request->v_month,
            $request->v_wday,
            $request->v_cmd
        );
        Flash::success('Вы успешно добавили задание.');
        return redirect()->route('cron.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($v_job)
    {
        return view('user/cron/edit', [
            'Cron' => Vesta::showCron($v_job)[$v_job],
            'name' => $v_job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit()
    {

    }

    /**
     * @param CronRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CronRequest $request)
    {
        Vesta::EditCron(
            $request->v_job,
            $request->v_min,
            $request->v_hour,
            $request->v_day,
            $request->v_month,
            $request->v_wday,
            $request->v_cmd
        );
        Flash::success('Вы успешно изменили задание.');
        return redirect()->route('cron.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy(CronDeleteRequest $request)
    {
        Vesta::deleteCron($request->v_job);
        Flash::success('Вы успешно добавили задание.');
        return redirect()->route('cron.index');
    }

}
