@extends('layouts.admin.admin')
@section('content')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="row">
    <!-- left column -->
    <div class="col-md-12">
      @if (session('success'))
        <script>
          Swal.fire({
          position: 'top-end',
          icon: 'success',
          title: 'บันทึกข้อมูลเรียบร้อย',
          showConfirmButton: false,
          timer: 1500
})

        </script>
        @endif
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
      @if (session('delete'))
      <script>
        Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'ลบข้อมูลเรียบร้อย',
        showConfirmButton: false,
        timer: 1500
})

      </script>
      @endif

      @if (session('error'))
      <script>
        Swal.fire({
        position: 'top-end',
        icon: 'error',
        title: 'ไม่สามารถลบประเภทสินค้าได้เนื่องจากมีสินค้าอยู่',
        showConfirmButton: false,
        timer: 1500
})

      </script>
      @endif
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Category</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('creat')}}" method="post">
          {{csrf_field()}}
          <div class="card-body">
            
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Product name">
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
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Category_id</th>
              <th>name</th>
              <th>Product Count</th>
              <th>Created_at</th>            
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($category as $categories)
                  
             
            <tr>
              <th scope="row">{{$categories->category_id}}</th>
              <td>{{$categories->name}}
                </td>
                <td> {{$categories->product->count()}}</td>
              <td>{{$categories->created_at}}</td>
           
              <td>
                  <a href="{{url('/admin/category/Edit/'.$categories->category_id)}}" class="btn btn-success">Edit</a>
                  <a href="{{url('/admin/category/Delete/'.$categories->category_id)}}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
    </div>


    
@endsection