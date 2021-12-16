@extends('layouts.admin.admin')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Content1</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('/admin/content1/Update/'.$editcontent1->id_content1)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$editcontent1->name}}">
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
                  <!--แสดงผลรูปภาพ-->
                  <div class="mt-4">
                  <img id="showImage" src="{{asset('admin/images/'.$editcontent1->image)}}" width="150px" alt=""
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