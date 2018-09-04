@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" align="center" style="background-color: #5C5053"> <h4 style="color: white">View Payments</h4></div>

                <div class="panel-body" style="height: 528px" style="background-color: #AAA2A4">

                   @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table">
                        <thead style="background-color: #BBAFB2">
                            <tr>
                               <th>Payment_Id</th> 
                               <th>Amount</th>
                               <th>Received</th>
                               <th>Remaining</th>
                               <th>Remarks</th>
                               <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #FAEDF0">
                          @foreach( $viewpayments as $payment)
                            <tr>
                          <td>{{$payment['payment_id']}}</td>
                          <td>{{$payment['payment_amount']}}</td>
                          <td>{{$payment['payment_received']}}</td>
                          <td>{{$payment['payment_remaining']}}</td>
                          <td>{{$payment['payment_remarks']}}</td>


                           <td><a href="{{action('paymentController@edit',$payment['payment_id'])}}" class="btn btn-warning">Edit</a>
                          </td>

                          <td>
                            <form action="{{action('paymentController@destroy',$payment['payment_id'])}}"method="post">
                              {{csrf_field()}}
                              <input type="hidden" name="_method" value="DELETE">
                              <button class="btn btn-danger" type="submit">Delete</button>
                              
                            </form>
                              
                          </td>
                          

                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection