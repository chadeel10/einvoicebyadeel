@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
         <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #5C5053"><h4 style="color: white">Upate User</h4></div>

                <div class="panel-body" style="height: 528px" style="background-color: #AAA2A4">

                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" method="POST" action="{{url('/user',$user['id'])}}">
                     <input type="hidden" name="_method" value="put">
                        {{csrf_field()}}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autofocus value="{{$user['name']}}">
                            </div>
                        </div>
                        {{--

                         <div class="form-group">
                            <label for="designation" class="col-md-4 control-label">Designation</label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control" name="designation"  required autofocus>
                            </div>
                        </div>
                        --}}

                       {{-- <div class="form-group">
                            <label for="type" class="col-md-4 control-label">Select Type</label>

                            <div class="col-md-6">
                                <select id="type" type="dropdown" class="form-control" name="type"  required autofocus>
                                    <option></option>
                                </select>
                            </div>
                        </div>
                        --}}

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required value="{{$user['email']}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required value="{{$user['password']}}">
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
