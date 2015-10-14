<?php

namespace Mautab\Http\Controllers\Guest;

use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Http\Requests\Guest\WhoIsRequest;
use Mautab\Services\Whois\Whois;

class WhoIsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('welcome.whois');
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
     * @param  Request $request
     * @return Response
     */
    public function store(WhoIsRequest $request)
    {
        $domain = parse_url($request->webdomain)['host'];
        $WhoIsDomain = new Whois($domain);

        if ($WhoIsDomain->isAvailable()) {
            $info = 'Домен не занят';
        } else {
            $info = $WhoIsDomain->Info();
        }

        return view('welcome.whois', [
            'domain' => $domain,
            'info' => $info
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
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
