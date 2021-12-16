@extends('layouts.admin.admin')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('/admin/category/Update/'.$category->category_id)}}" method="post">
          {{csrf_field()}}
          <div class="card-body">
            
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
            </div>
            @error('name')
              <span class="text-danger">{{$message}}</span>
            @enderror
            
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
  
      </div>
    </div>


    
@endsection