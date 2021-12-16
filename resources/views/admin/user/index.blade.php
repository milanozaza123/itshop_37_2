@extends('layouts.admin.admin')
@section('content')

<div class="row">

        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>id</th>
              <th>name</th>
              <th>email</th>
              <th>address</th>
              <th>phone</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                      
            <tr>
              <td>{{$user->id}}
                </td>
              <td>{{$user->name}}</td>
              <td> {{$user->email}}</td>
              <td> {{$user->address}}</td>
              <td> {{$user->phone}}</td>
              <td>
                  <a href="{{url('/admin/user/edit/'.$user->id)}}" class="btn btn-success">Edit</a>
                  <a href="{{url('/admin/user/delete/'.$user->id)}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>
</div>

    
@endsection