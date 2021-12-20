@extends('layouts.admin.admin')
@section('content')

<div class="row">
    <!-- left column -->
    
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Product</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('product_c')}} " method="post" enctype="multipart/form-data">
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
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="description">
                @error('description')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="price">
                @error('price')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
              <!--<div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" name="category" placeholder="category">
                @error('category')
                <span class="text-danger">{{$message}}</span>
              @enderror
              
              </div>
            -->
           
              <!-- select -->
              <div class="form-group">
                <label>Category</label>
                <select class="form-control" name="category">
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
    </div>
</div>
    
@endsection