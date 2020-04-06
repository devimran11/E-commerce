@extends('admin.master')
@section('title')
    Manage-Brand
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
                    <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>Brand ID</th>
                        <th>Brand Name</th>
                        <th>Brand Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;?>
                    @foreach($allBrands as $allBrand)
                        <tr>
                            <td>{{$i++ }}</td>
                            <td>{{$allBrand->id}}</td>
                            <td>{{$allBrand->brand_name}}</td>
                            <td>{{$allBrand->brand_description}}</td>
                            <td>{{$allBrand->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>

                                @if($allBrand->publication_status == 1)
                                    <a href="{{url('/unpublished-brand/'.$allBrand->id)}}" class="btn btn-success btn-sm" title="Published Brand">
                                        <i class="fas fa-arrow-alt-circle-up"></i>
                                    </a>
                                @else
                                    <a href="{{url('/published-brand/'.$allBrand->id)}}" class="btn btn-dark btn-sm" title="Published Brand">
                                        <i class="fas fa-arrow-alt-circle-down"></i>
                                    </a>

                                @endif
                                <a href="{{url('/edit-brand/'.$allBrand->id)}}" class="btn btn-info btn-sm">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <a href="{{url('/delete-brand/'.$allBrand->id)}}" class="btn btn-danger btn-sm" title="Delete Brand" onclick="return confirm('Are you sure delete this!')">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>
@endsection