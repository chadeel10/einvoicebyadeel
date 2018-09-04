<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\payment;

class paymentController extends Controller
/*{
     public function payment()
    {
        return view('receivepayment');
    }


     public function index()
    {
        return view('viewpayments');
    }
}*/
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $viewpayments= payment::all()->toArray();
        return view('viewpayments', compact('viewpayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receivepayment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payment= new payment([ 'payment_amount'=>$request->get('amount'),
            'payment_received'=>$request->get('received'),
            'payment_remaining'=>$request->get('remaining'),
            'payment_remarks'=>$request->get('remarks')]);

        $payment->save();
        return redirect('/payment/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment = payment::find($id);
        return view('editpayment',compact('payment','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payment = payment::find($id);
        $payment->payment_amount = $request->get('amount');
        $payment->payment_received = $request->get('received');
        $payment->payment_remaining = $request->get('remaining');
        $payment->payment_remarks = $request->get('remarks');
        $payment->save();
        return redirect('/payment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $payment =payment::find($id);
       $payment->delete();
       return redirect('/payment');
    }
}

