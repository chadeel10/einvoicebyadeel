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
                    
                    <table class="table">
                        <thead style="background-color: #BBAFB2">
                            <tr>
                               <th>Payment Type</th> 
                               <th>Amount</th>
                               <th>Received</th>
                               <th>Remaining</th>
                               <th>Remarks</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #FAEDF0">
                            <tr></tr> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection