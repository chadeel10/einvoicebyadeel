@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
         <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" align="center" style="background-color: #5C5053"><h4 style="color: white">Update Payment</h4></div>

                <div class="panel-body" style="height: 528px" style="background-color: #AAA2A4">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{url('/payment',$payment['payment_id'])}}">
                     <input type="hidden" name="_method" value="put">
                        {{csrf_field()}}
                        {{--

                        <div class="form-group">
                            <label for="payment" class="col-md-4 control-label">Payment Type</label>

                            <div class="col-md-6">
                                <select type="dropdown" class="form-control" name="payment"  required autofocus>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        --}}

                         <div class="form-group">
                            <label for="amount" class="col-md-4 control-label">Amount</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="amount"  required autofocus value="{{$payment['payment_amount']}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="received" class="col-md-4 control-label">Received</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="received"  required autofocus value="{{$payment['payment_received']}}">       
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="remaining" class="col-md-4 control-label">Remaining</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="remaining"  required autofocus value="{{$payment['payment_remaining']}}">       
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="remarks" class="col-md-4 control-label">Remarks</label>

                            <div class="col-md-6">
                                <textarea type="textarea" rows="2" class="form-control" name="remarks"  required autofocus >{{$payment['payment_remarks']}}
                                </textarea>       
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
