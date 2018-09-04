<?php

namespace App\Http\Controllers;
use App\invoice;

use Illuminate\Http\Request;

class invoiceController extends Controller
/*{
     public function invoice()
    {
        return view('invoice');
    }


    public function index()
    {
        return view('viewinvoice');
    }
}
*/
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $viewinvoice= invoice::all()->toArray();
        return view('viewinvoice', compact('viewinvoice'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('invoice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $invoice= new invoice([ 'subject'=>$request->get('subject'),
            'invoice_date'=>$request->get('invoicedate'),
            'due_date'=>$request->get('duedate'),
            'terms_Condition'=>$request->get('terms&Condition'),
            'status'=>$request->get('status'),
            'total'=>$request->get('total'),
            'discount'=>$request->get('discount'),
            'net_total'=>$request->get('nettotal')]);
            

        $invoice->save();
        return redirect('/invoice/create');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
