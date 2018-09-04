@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
            @include('layouts.sidebar')
        </div>
        <div class="col-md-10 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: #5C5053"><h4 style="color: white">Update Contact</h4></div>

                <div class="panel-body" style="height: 528px" style="background-color: #AAA2A4">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="{{url('/contact',$contact['contact_id'])}}">
                     <input type="hidden" name="_method" value="put">
                        {{csrf_field()}}

                       {{-- <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Select Label</label>

                            <div class="col-md-6">
                                <select id="name" type="dropdown" class="form-control" name="label"  required autofocus>
                                    <option></option>
                                    
                                </select>
                            </div>
                        </div>--}}

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  required autofocus value="{{$contact['owner_name']}}">

                            </div>
                        </div>

                         <div class="form-group">
                            <label for="businessname" class="col-md-4 control-label">Business Name</label>

                            <div class="col-md-6">
                                <input id="businessname" type="text" class="form-control" name="businessname"  required autofocus value="{{$contact['business_name']}}">
                            </div>
                        </div>
                        {{--

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required>
                            </div>
                        </div>
--}}
                        <div class="form-group">
                            <label for="contact" class="col-md-4 control-label">Contact</label>

                            <div class="col-md-6">
                                <input id="contact" type="text" class="form-control" name="contact" required autofocus value="{{$contact['business_phone']}}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input  type="text" class="form-control" name="address" required autofocus value="{{$contact['contact_address']}}">
                            </div>
                        </div>



                       {{-- <div class="form-group">
                            <label for="select status" class="col-md-4 control-label">Select Status</label>

                            <div class="col-md-6">
                                <select  type="dropdown" class="form-control" name="status" required autofocus>
                                    <option></option>
                                   
                                </select>

                            </div>
                        </div>
                        --}}

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
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
