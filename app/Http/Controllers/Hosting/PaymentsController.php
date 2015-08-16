<?php

namespace Mautab\Http\Controllers\Hosting;

use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Services\WalletOne\PaymentForm as WalletOneForm;

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {


        $sellerPurse = 122418262209;
        $paymentAmount = 1.00;
        $currencyCode = 643;
        $orderId = 1000;
        $paymentTypeList = array(
            'LiqPayMoneyRUB',
            'CreditCardRUB',
            'BankTransferMDL',
            'AlfaclickRUB',
            'RussianPostRUB',
            'SvyaznoyRUB',
            'CashTerminalBYR',
            'YandexMoneyRUB'
        );
        $secret = "436d6b6a356850344e686e7c6a413737796e7b4c734e4b707b385d";
        //$secret = '435c79356c676b51765735534f4d4b664455744945356149573363';
# Создаем форму
        $w1Form = new WalletOneForm($sellerPurse);
# Страницы на которые будут отправлены ответы
        $w1Form
            ->setSuccessLink("http://weplay.tv/all/shop_payment/success/{$orderId}/card")
            ->setFailLink("http://weplay.tv/all/shop_payment/fail/{$orderId}/card");
# Задаем разрешенные методы оплаты
        if ($paymentTypeList && is_array($paymentTypeList)) {
            foreach ($paymentTypeList as $paymentType) {
                $w1Form->addPaymentType($paymentType);
            }
        }
# Параметры оплаты
        $w1Form
            ->setPaymentAmount($paymentAmount)
            ->setCurrencyCode($currencyCode)
            ->setPaymentId($orderId)
            ->setComment("Оплата заказа #{$orderId}")
            ->addCustomerValue('orderId', $orderId)
            ->setSecretKey($secret)
            ->setSignatureMethod('sha1');
# Проверяем данные
        if ($w1Form->validateData()) {
            # Сохраняем номер транзакции
            $transactionId = $w1Form->getTransactionId();
            # Включаем автосабмит формы сразу после загрузки страницы
            $w1Form->enableFormAutoSubmit();
            # Выводим форму
            echo $w1Form->buildFormView();
        }


        /*
                $Payments = Auth::User()->getPayments()->simplePaginate(5);
                return view('user.user.payments', [
                    'Payments' => $Payments
                ]);
          */
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
        //
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
