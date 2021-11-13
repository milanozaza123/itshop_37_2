@extends('layouts.admin.admin')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Products</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Product_id</th>
              <th>name</th>
              <th>image</th>
              <th>category</th>
              <th>price</th>
              <th>action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>Trident</td>
              <td>Internet
                Explorer 4.0
              </td>
              <td>Win 95+</td>
              <td> 4</td>
              <td>X</td>
              <td>
                  <a href="" class="btn btn-success">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
              </td>
            </tr>
            
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
    
@endsection