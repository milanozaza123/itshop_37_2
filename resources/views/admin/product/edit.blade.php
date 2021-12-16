@extends('layouts.admin.admin')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('/admin/product/update/'.$editproduct->id_product)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$editproduct->name}}">
              @error('name')
              <span class="text-danger">{{$message}}</span>
            @enderror
            
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$editproduct->description}}">
                @error('description')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$editproduct->price}}">
                @error('price')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
              <!--<div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category" value="{{$editproduct->category_id}}">
                @error('category')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>-->

              <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category">
                  <option selected="selected" value="{{$editproduct->category_id}}">{{$editproduct->category->name}}</option>
                  @foreach ($categories as $category)
                  <option value="{{$category->category_id}}">{{$category->name}}</option>
              
                  @endforeach
                </select>
              </div>
              
              <div class="form-group">
                <label for="image">Image</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                  </div>
                  <!--แสดงผลรูปภาพ-->
                  <div class="mt-4">
                  <img id="showImage" src="{{asset('admin/images/'.$editproduct->image)}}" width="150px" alt=""
                </div>

                <div>
                  @error('image')
                  <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
                </div>
              </div>
            
            
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Upadate</button>
          </div>
        </form>
      </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('#image').change(function(e){
       var reader = new FileReader();
       reader.onload = function(e){
         $('#showImage').attr('src',e.target.result);
       }
       reader.readAsDataURL(e.target.files['0']);
    });
});
</script>
@endsection