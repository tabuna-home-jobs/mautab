<?php

namespace Mautab\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Models\Package;
use Session;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Package = Package::lists('id', 'name');
        return view('admin.package.index', [
            'Package' => $Package
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
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        Package::create($request->all());
        Session::flash('good', 'Вы создали новый тариф');
        return redirect()->back();
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
    public function edit($SelectPackage)
    {
        $Package = Package::lists('id', 'name');
        return view('admin.package.edit', [
            'Package' => $Package,
            'SelectPackage' => $SelectPackage
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $SelectPackage)
    {
        $SelectPackage->fill($request->all());
        $SelectPackage->save();
        Session::flash('good', 'Вы изменили значение.');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($SelectPackage)
    {
        $SelectPackage->delete();
        Session::flash('good', 'Вы изменили значение.');
        return redirect()->back();
    }
}
