@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
       <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #5C5053" align="center"><h4 style="color: white">View All Users</h4></div>

                <div class="panel-body" style="height: 528px" style="background-color: #AAA2A4">
                    
                    <table class="table">
                        <thead style="background-color: #BBAFB2">
                            <tr>
                               <th>Name</th> 
                               <th>Designation</th>
                               <th>Email</th>
                               <th>Password</th>
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