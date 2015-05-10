<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Admin\GroupRequest;
use App\Models\Group;
use Sentry;

class GroupsController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{


		//dd(Route::currentRouteName());
		//dd(Route::current());
		$Groups = Group::paginate(15);

		return view('admin/groups', ['Groups' => $Groups]);
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
	public function store(GroupRequest $request)
	{

		try {
			// Create the group
			$group = Sentry::createGroup(array(
				'name'        => $request->name,
				'permissions' => $request->permissions
			));
		} catch (Cartalyst\Sentry\Groups\NameRequiredException $e) {
			echo 'Name field is required';
		} catch (Cartalyst\Sentry\Groups\GroupExistsException $e) {
			echo 'Group already exists';
		}


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
