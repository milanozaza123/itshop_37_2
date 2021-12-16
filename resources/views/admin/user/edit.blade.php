@extends('layouts.admin.admin')
@section('content')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
     
        @if (session('update'))
        <script>
          Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'แก้ไขข้อมูลเรียบร้อย',
          showConfirmButton: false,
          timer: 1500
})

        </script>
        @endif   
     
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{url('/admin/user/update/'.$users->id)}}" method="post">
          {{csrf_field()}}
          <div class="card-body">
            
            <div class="form-group">
              <label for="name">name</label>
              <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}">
            </div>
            @error('name')
              <span class="text-danger">{{$message}}</span>
            @enderror

            <div class="form-group">
                <label for="name">Email</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$users->email}}">
              </div>
              @error('name')
                <span class="text-danger">{{$message}}</span>
              @enderror
            
              <div class="form-group">
                <label for="name">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$users->address}}">
              </div>
              @error('name')
                <span class="text-danger">{{$message}}</span>
              @enderror
            
              <div class="form-group">
                <label for="name">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{$users->phone}}">
              </div>
              @error('name')
                <span class="text-danger">{{$message}}</span>
              @enderror
          </div>
          
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>

      <div class="card">
          
        </div>
        <!-- /.card-header -->
        <!-- /.card-body -->
      </div>
    </div>
</div>

    
@endsection