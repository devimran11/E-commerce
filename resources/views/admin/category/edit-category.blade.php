@extends('admin.master');
@section('title')
    Edit Category
@endsection
@section('content')
    <br/>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <h1 class="text-center text-success">{{Session::get('message')}}</h1>


                <form action="{{url('/update-category')}}" method="POST" class="form-horizontal" name="edit-category">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-3">Category Name</label>
                        <div class="col-sm-9">
                            <input type="text" value="{{$categoryById->category_name}}" name="category_name" class="form-control"/>
                            <input type="hidden" value="{{$categoryById->id}}" name="category_id" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Category Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="category_description">{{$categoryById->category_description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3">Publication Status</label>
                        <div class="col-sm-9">
                            <select name="publication_status" class="form-control">
                                <option>---Select Publication Status---</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Students Info"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.forms['edit-category'].elements['publication_status'].value = '{{$categoryById->publication_status}}';
    </script>
@endsection