<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Vesta;

class BackupController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$Backups = Vesta::listUserBackups();

		return view('user/backup', ['Backups' => $Backups]);
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
	public function store()
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
	public function show($backup)
	{
		$backupDetal = Vesta::showUserBackup($backup)["$backup"];

		return view('user/backupDetal', ['Backup' => $backupDetal, 'name' => $backup]);
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
	public function destroy($backup)
	{
		Vesta::deleteUserBackup($backup);
		Session::flash('good', 'Вы успешно удалили базу данных.');

		return redirect()->route('backup.index');
	}

}
