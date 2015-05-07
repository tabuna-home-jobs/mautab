<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\RemoveDNSRecordRequest;
use Session;
use Vesta;

class RecordController extends Controller
{

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
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
	public function show($domain)
	{
		$records = Vesta::listDNSRecords($domain);

		return view('dns/records', ['records' => $records, 'domain' => $domain]);
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
    public function destroy(RemoveDNSRecordRequest $request)
	{
        Vesta::removeDNSRecord($request->v_domain, $request->v_record_id);
        Session::flash('good', 'Вы успешно удалили запись.');
        return redirect()->route('records.show', $request->v_domain);
	}

}
