<?php

namespace Mautab\Http\Controllers\Guest;

use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Http\Requests\SEO\WhoisRequest;
use Mautab\Services\Whois\Whois;

class WhoisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('seo/whois');

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
    public function store(WhoisRequest $request)
    {

        $domain = new Whois($request->domain);


        if (!$domain->isAvailable()) {
            $result = $domain->info();
        } else {
            $result = "Домен свободен";
        }

        return view('seo/whois')->withName($result);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {


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
     * @param  int $id
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
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
