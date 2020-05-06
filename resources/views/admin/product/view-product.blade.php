@extends('admin.master')
@section('title')
    Manage-category
@endsection
@section('table')
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Data Table Example</div>
        <div class="card-body">
            <div class="table-responsive">
                <h1 class="text-center text-success">{{Session::get('message')}}</h1>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>Product Id</th>
                        <td>{{ $product->id }}</td>
                    </tr>
                    <tr>
                        <th>Category Name</th>
                        <td>{{$product->category_name}}</td>
                    </tr>
                    <tr>
                        <th>Brand Name</th>
                        <td>{{$product->brand_name}}</td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>{{$product->product_name}}</td>
                    </tr>
                    <tr>
                        <th>Product Code</th>
                        <td>{{$product->product_code}}</td>
                    </tr>
                    <tr>
                        <th>Product Price</th>
                        <td>{{$product->product_price}}</td>
                    </tr>
                    <tr>
                        <th>Product Quantity</th>
                        <td>{{$product->product_quantity}}</td>
                    </tr>
                    <tr>
                        <th>Product Short Description</th>
                        <td>{{$product->short_description}}</td>
                    </tr>
                    <tr>
                        <th>Product Long Description</th>
                        <td>{{$product->long_description}}</td>
                    </tr>
                    <tr>
                        <th>Product Image</th>
                        <td><img src="{{URL::to($product->product_image)}}" height="50px" width="50px"></td>
                    </tr>
                    <tr>
                        <th>Publication Status</th>
                        <td>{{$product->publication_status}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
@endsection
