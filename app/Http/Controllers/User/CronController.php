<?php namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CronDeleteRequest;
use App\Http\Requests\CronRequest;
use Session;
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
		return view('cron/index', ['CronList' => Vesta::listCron()]);
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
		Session::flash('good', 'Вы успешно добавили задание.');
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
        return view('cron/edit', ['Cron' => Vesta::showCron($v_job)[$v_job], 'name' => $v_job]);
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
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
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
        Session::flash('good', 'Вы успешно изменили задание.');
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
		Session::flash('good', 'Вы успешно добавили задание.');

		return redirect()->route('cron.index');
	}

}