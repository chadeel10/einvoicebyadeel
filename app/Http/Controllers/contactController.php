<?php

namespace App\Http\Controllers;
use App\contact;
use Illuminate\Http\Request;

class contactController extends Controller
/*{
     public function create()
    {
        return view('contact');
    }

     public function index()
    {
        return view('viewcontact');
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
        $viewcontact= contact::all()->toArray();
        return view('viewcontact', compact('viewcontact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact= new contact([ 'owner_name'=>$request->get('name'),
            'business_name'=>$request->get('businessname'),
            'business_phone'=>$request->get('contact'),
            'contact_address'=>$request->get('address')]);

        $contact->save();
        return redirect('/contact');
        
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
    public function edit($contact_id)
    {
        $contact = contact::find($contact_id);
        return view('editcontact',compact('contact','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contact_id)
    {
        $contact = contact::find($contact_id);
        $contact->owner_name = $request->get('name');
        $contact->business_name = $request->get('businessname');
        $contact->business_phone = $request->get('contact');
        $contact->contact_address = $request->get('address');
        $contact->save();
        return redirect('/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact =contact::find($id);
       $contact->delete();
       return redirect('/contact');

    }
}

