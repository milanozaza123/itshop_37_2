@extends('layouts.admin.admin')
@section('content')

<div class="row">
  <!-- left column -->
  
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Background</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{route('background_c')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="name">
            @error('name')
            <span class="text-danger">{{$message}}</span>
          @enderror
          
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" name="status" placeholder="status name">
            @error('name')
            <span class="text-danger">{{$message}}</span>
          @enderror
          
          </div>
          
           
            <div class="form-group">
              <label for="image">Image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="image" id="image">
                  <label class="custom-file-label" for="image">Choose file</label>
                </div>
                @error('image')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
            </div>
          
          
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
    <div class="card-body">
      <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
          <th>id_background</th>
          <th>name</th>
          <th>status</th>
          <th>image</th>
          <th>Created_at</th>            
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($background as $backgrounds)
              
         
        <tr>
          <th scope="row">{{$backgrounds->id_background}}</th>
          <td>{{$backgrounds->name}}</td>
          <td>{{$backgrounds->status}}</td>
            <td>
              <img src=" {{asset('admin/images/'.$backgrounds->image)}}" alt="" style="width:100px"
             </td>
          <td>{{$backgrounds->created_at}}</td>
       
          <td>
              <a href="{{url('/admin/background/Edit/'.$backgrounds->id_background)}}" class="btn btn-success">Edit</a>
              <a href="{{url('/admin/background/Delete/'.$backgrounds->id_background)}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
  
@endsection