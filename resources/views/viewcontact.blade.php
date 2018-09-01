@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #5C5053" align="center"> <h4 style="color: white">View Contacts</h4></div>

                <div class="panel-body" style="height: 528px" style="background-color: #AAA2A4">
                    
                    <table class="table">
                        <thead style="background-color: #BBAFB2">
                            <tr>
                               <th>Name</th>
                               <th>Business Name</th>
                               <th>label Name</th>
                               <th>Contact</th>
                               <th>Email</th>
                               <th>Status</th>
                               <th>Receive payments</th>
                               <th>Action</th>
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
