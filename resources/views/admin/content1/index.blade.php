@extends('layouts.admin.admin')
@section('content')

<div class="row">
  <!-- left column -->
  
  <div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Content1</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{route('content1_c')}} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
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
          <th>id_content1</th>
          <th>name</th>
          <th>image</th>
          <th>Created_at</th>            
          <th>Action</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($content1 as $contents)
              
         
        <tr>
          <th scope="row">{{$contents->id_content1}}</th>
          <td>{{$contents->name}}
            </td>
            <td>
              <img src=" {{asset('admin/images/'.$contents->image)}}" alt="" style="width:100px"
             </td>
          <td>{{$contents->created_at}}</td>
       
          <td>
              <a href="{{url('/admin/content1/Edit/'.$contents->id_content1)}}" class="btn btn-success">Edit</a>
              <a href="{{url('/admin/content1/Delete/'.$contents->id_content1)}}" class="btn btn-danger">Delete</a>
          </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
  
@endsection