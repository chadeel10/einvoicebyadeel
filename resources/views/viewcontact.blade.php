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

                   @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table">
                        <thead style="background-color: #BBAFB2">
                            <tr>
                             {{-- <th>Contact_Id</th>--}}
                               <th>Name</th>
                               <th>Business Name</th>
                               {{--<th>label Name</th>--}}
                               <th>Contact</th>
                               {{--<th>Email</th>
                               <th>Status</th>
                               <th>Receive payments</th>
                               <th>Action</th>--}}
                                <th>Contact_Adress</th>
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #FAEDF0">
                          @foreach($viewcontact as $contact)
                          <tr>
                          {{--<td>{{$contact['contact_id']}}</td>--}}
                          <td>{{$contact['owner_name']}}</td>
                          <td>{{$contact['business_name']}}</td>
                          <td>{{$contact['business_phone']}}</td>
                          <td>{{$contact['contact_address']}}</td>
                          
                          <td><a href="{{action('contactController@edit',$contact['contact_id'])}}" class="btn btn-warning">Edit</a>
                          </td>

                          <td>
                            <form action="{{action('contactController@destroy',$contact['contact_id'])}}"method="post">
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
