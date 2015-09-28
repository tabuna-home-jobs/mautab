<?php

namespace Mautab\Http\Controllers\API;

use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Models\Payments;
use Mautab\Services\WalletOne\PaymentVerify as WalletOneVerify;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payments = Payments::where('w1_id', $request->WMI_ORDER_ID)->firstOrFail();
        $w1Verify = new WalletOneVerify();

        # Загружаем данные
        $w1Verify->loadFromPOST();

        # Проверяем номер транзакции и статус оплаты
        if ($w1Verify->getTransactionId() === $payments->w1_id && $w1Verify->isPaymentAccepted()) {

            $user = $payments->getUser();
            $user->balans = $user->balans + $payments->sum;
            $user->save();
            $payments->status = true;
            $payments->save();

            # Успешно
            echo 'WMI_RESULT=OK';
        } else {
            # Ошибка
            echo "WMI_RESULT=RETRY&WMI_DESCRIPTION=Сервер временно недоступен";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
