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
                    <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Category Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1;?>
                    @foreach($allCategories as $allCategory)
                    <tr>
                        <td>{{$i++ }}</td>
                        <td>{{$allCategory->id}}</td>
                        <td>{{$allCategory->category_name}}</td>
                        <td>{{$allCategory->category_description}}</td>
                        <td>{{$allCategory->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                        <td>

                            @if($allCategory->publication_status == 1)
                            <a href="{{url('/unpublished-category/'.$allCategory->id)}}" class="btn btn-success btn-sm" title="Published Category">
                                <i class="fas fa-arrow-alt-circle-up"></i>
                            </a>
                            @else
                                <a href="{{url('/published-category/'.$allCategory->id)}}" class="btn btn-dark btn-sm" title="Published Category">
                                    <i class="fas fa-arrow-alt-circle-down"></i>
                                </a>

                            @endif
                            <a href="{{url('/edit-category/'.$allCategory->id)}}" class="btn btn-info btn-sm">
                                <i class="fas fa-edit"></i>
                            </a>

                            <a href="{{url('/delete-category/'.$allCategory->id)}}" class="btn btn-danger btn-sm" title="Delete Category" onclick="return confirm('Are you sure delete this!')">
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