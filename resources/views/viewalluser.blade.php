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

                  @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <table class="table">
                        <thead style="background-color: #BBAFB2">
                            <tr>
                              <th>User_Id</th>
                               <th>Name</th> 
                               <th>Email</th>
                               <th>Password</th>
                               <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <tbody style="background-color: #FAEDF0">
                          @foreach($viewalluser as $user)
                            <tr>
                          <td>{{$user['id']}}</td>
                          <td>{{$user['name']}}</td>
                          <td>{{$user['email']}}</td>
                          <td>{{$user['password']}}</td>

                          <td><a href="{{action('userController@edit',$user['id'])}}" class="btn btn-warning">Edit</a>
                          </td>

                          <td>
                            <form action="{{action('userController@destroy',$user['id'])}}"method="post">
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