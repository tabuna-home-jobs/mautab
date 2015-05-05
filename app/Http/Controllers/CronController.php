<?php namespace App\Http\Controllers;

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
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function update($id)
	{
		//
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
