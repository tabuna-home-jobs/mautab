<?php
namespace App\Http\Controllers;

use App\Http\Requests\AddDNSRequest;
use App\Http\Requests\ChangeDNSRequest;
use App\Http\Requests\RemoveDNSRequest;
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
		Vesta::changeDNSDomainTtl($request->dns, $request->ttl);
		Session::flash('good', 'Вы успешно изменили ДНС.');

		return redirect()->route('dns.index');

	}

	public function store(AddDNSRequest $request)
	{

		Vesta::addDNSDomain(
			$request->v_domain,
			$request->v_ip,
			$request->v_ns1,
			$request->v_ns2
		);

		Session::flash('good', 'Вы успешно добавили DNS.');

		return redirect()->route('dns.index');
	}

	public function destroy(RemoveDNSRequest $request)
	{

		Vesta::deleteDNDDomain($request->v_domain);
		Session::flash('good', 'Вы успешно удалили Домен.');

		return redirect()->route('dns.index');
	}



}
