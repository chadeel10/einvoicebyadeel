@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
         <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" align="center" style="background-color: #5C5053"><h4 style="color: white">Recive Payment</h4></div>

                <div class="panel-body" style="height: 528px" style="background-color: #AAA2A4">
                    <form class="form-horizontal" method="POST" action="{{url('/payment')}}">
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
                                <input type="text" class="form-control" name="amount"  required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="received" class="col-md-4 control-label">Received</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="received"  required autofocus>       
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="remaining" class="col-md-4 control-label">Remaining</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="remaining"  required autofocus>       
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="remarks" class="col-md-4 control-label">Remarks</label>

                            <div class="col-md-6">
                                <textarea type="textarea" rows="2" class="form-control" name="remarks"  required autofocus>
                                </textarea>       
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Recive
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
