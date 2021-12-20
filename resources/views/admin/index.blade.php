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
              <th>description</th>
              <th>image</th>
              <th>price</th>
              <th>category</th>
              <th>action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($product as $products)
              <tr>
              
                <td>{{$products->id_product}}</td>
                <td>
                  {{$products->name}} </td>
                  <td>{{$products->description}}</td>
                  <td>
                   <img src=" {{asset('admin/images/'.$products->image)}}" alt="" style="width:100px"
                  </td>
                  <td>฿{{number_format($products->price)}}</td>
                <td> {{$products->category->name}}</td>
                
                <td>  
                    <a href="{{url('/admin/product/edit/'.$products->id_product)}}" class="btn btn-success">Edit</a>
                    <a href="{{url('/admin/product/delete/'.$products->id_product)}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              
              @endforeach
            
            </tbody>
            </table>
          </div>
        </div>
        </div>
      </div>


    

@endsection