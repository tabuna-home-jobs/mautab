<?php namespace App\Http\Controllers;


use Auth;
use App\Models\Payments;
use Illuminate\Support\Facades\View;
use DB;

class RobokassaController extends Controller {

	private	$name = 'cloudme';
	private	$password = '03af4de10%';
	private $current = "";
	private $lang = "ru";

	private function payments($summ, $id_order, $type_goods, $descr){
		$crc  = md5("$this->name:$summ:$id_order:$this->password:Shp_item=$type_goods");

		return
			"<input type=hidden name=MrchLogin value='$this->name'".
			"<input type=hidden name=OutSum value='$summ'>".
			"<input type=hidden name=InvId value='$id_order'>".
			"<input type=hidden name=Desc value='$descr'>".
			"<input type=hidden name=SignatureValue value='$crc'>".
			"<input type=hidden name=Shp_item value='$type_goods'>".
			"<input type=hidden name=IncCurrLabel value='$this->current'>".
			"<input type=hidden name=Culture value='$this->lang'>".
			"<input type=submit value='Оплатить'>";
	}

	//Главная
	public function getIndex() {
		$payments = DB::table('payments')
			->leftJoin('package', 'package.id', '=', 'payments.goods')
			->simplePaginate(15);

		return view('payments/index',['payments' => $payments]);
	}

	//Страница оплаты
	public function getPay(){

	}

	// История платежей
	public function getHistory(){

	}

	//Оплата успех
	public function getSuccess(){

	}

	//Оплата не произведена
	public function getFail(){

	}

	//Результат оплаты
	public function getResult(){

	}



}
