<?php
namespace App\Http\Controllers;

use App\Http\Requests\ChangeDNSRequest;
use Session;
use Vesta;

class DnsController extends Controller{

	public function __construct(){

		$this->middleware('auth');

	}

	public function Index()
	{
		$DnsList = Vesta::listDNS();
		return view('dns/index',['DnsList' => $DnsList]);
	}

	public function show($name)
	{
		return view('dns/editList', ['DnsList' => Vesta::listOnlyDNS($name)]);
	}

	public function update(ChangeDNSRequest $request)
	{

		Vesta::changeDNSDomainExp($request->dns, $request->exp);
		Vesta::changeDNSDomainTtl($request->dns, $request->TTL);
		Session::flash('good', 'Вы успешно изменили ДНС.');

		return redirect()->route('dns.index');

	}


}
