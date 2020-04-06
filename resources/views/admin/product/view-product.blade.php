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
                        <td>ID</td>
                    </tr>
                    <tr>
                        <th>Brand Name</th>
                        <td>ID</td>
                    </tr>
                    <tr>
                        <th>Product Name</th>
                        <td>ID</td>
                    </tr>
                    <tr>
                        <th>Product Code</th>
                        <td>ID</td>
                    </tr>
                    <tr>
                        <th>Product Price</th>
                        <td>ID</td>
                    </tr>
                    <tr>
                        <th>Product Quantity</th>
                        <td>ID</td>
                    </tr>
                    <tr>
                        <th>Product Short Description</th>
                        <td>ID</td>
                    </tr>
                    <tr>
                        <th>Product Long Description</th>
                        <td>ID</td>
                    </tr>
                    <tr>
                        <th>Product Image</th>
                        <td>ID</td>
                    </tr>
                    <tr>
                        <th>Publication Status</th>
                        <td>ID</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
@endsection