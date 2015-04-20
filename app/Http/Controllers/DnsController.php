<?php
namespace App\Http\Controllers;

use Auth;
use Vesta;

class DnsController extends Controller{

	public function __construct(){

		$this->middleware('auth');

	}

	public function getIndex(){

		$DnsList = Vesta::listDNS();
		return view('dns/index',['DnsList' => $DnsList]);

	}

}
