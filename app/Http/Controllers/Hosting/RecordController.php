<?php namespace Mautab\Http\Controllers\Hosting;

use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests\DomainRecordRequest;
use Mautab\Http\Requests\RemoveDNSRecordRequest;
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
    public function store(DomainRecordRequest $request)
    {
        Vesta::addDNSRecord(
            $request->v_domain,
            $request->v_rec,
            $request->v_type,
            $request->v_val,
            $request->v_priority
        );
        Session::flash('good', 'Вы успешно изменили запись.');

        return redirect()->route('records.show', $request->v_domain);
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

        return view('user/dns/records', ['records' => $records, 'domain' => $domain]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($domain, DomainRecordRequest $request)
    {
        $record = Vesta::listDNSRecords($domain)[$request->record];

        return view('user/dns/editRecord', ['record' => $record, 'domain' => $domain]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($domain, DomainRecordRequest $request)
    {
        Vesta::changeeDNSDomainRecord(
            $domain,
            $request->record,
            $request->v_val,
            (int)$request->v_priority);
        Session::flash('good', 'Вы успешно изменили запись.');

        return redirect()->route('records.show', $domain);
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
