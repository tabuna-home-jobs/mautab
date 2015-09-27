<?php

namespace Mautab\Http\Controllers\Hosting;

use Auth;
use Illuminate\Http\Request;
use Mautab\Http\Controllers\Controller;
use Mautab\Http\Requests;
use Mautab\Models\Payments;
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
        $Payments = Auth::User()->getPayments()->orderBy('id', 'Desc')->simplePaginate(5);
        return view('user.user.payments', [
            'Payments' => $Payments
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
        $order = new Payments([
            'sum' => $request->sum,
            'users_id' => Auth::user()->id,
            'status' => null
        ]);
        $order->save();

        $w1Form = new WalletOneForm();
        $w1Form
            ->setPaymentAmount($order->sum)
            ->setPaymentId($order->id)
            ->setComment("Оплата заказа #{$order->id}")
            ->addCustomerValue('orderId', $order->id);

        if ($w1Form->validateData()) {
            $order->w1_id = $w1Form->getTransactionId();
            $order->save();
            $w1Form->enableFormAutoSubmit();
            echo $w1Form->buildFormView();
        }
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
