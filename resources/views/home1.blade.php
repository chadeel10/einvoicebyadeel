@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
       <div class="col-md-10  " >
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #5C5053"><h4 style="color: white">Home</h4></div>

                <div class="panel-body" style="height: 528px" style="background-color: #AAA2A4">
                   <table class="table">
                    <tr style="margin-top: 50px;">
                  <td> <button type="button" class="btn btn-default btn-lg">Total Clients</button></td>
                  <td> <button type="button" class="btn btn-default btn-lg">Total Amount</button></td>
                  <td><button type="button" class="btn btn-default btn-lg">Pending Amount</button></td>
                   </tr>
                   <tr>
                  <td> <button type="button" class="btn btn-default btn-lg">Paid Amount</button></td>
                  <td> <button type="button" class="btn btn-default btn-lg">Due Amount</button></td>
                  <td> <button type="button" class="btn btn-default btn-lg">Total lables</button></td>
                </tr>
                 </table>

                   </div>
                </div> 
            </div>
        </div>
    </div>
</div>
@endsection