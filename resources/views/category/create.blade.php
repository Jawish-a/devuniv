@extends('admin') 
@section('pagecss')
@endsection
 
@section('content') {{-- start of page content --}}
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        Create New Category
    </h1>
    <form action="{{ action('CategoryController@store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-9">
                <div class="form-group">
                    <label for="majorName">Category Name</label>
                    <input type="text" class="form-control  border-1" name="categoryName" id="categoryName" placeholder="Insert Category Name"
                        required>
                </div>
                <div class="form-group">
                    <label for="categoryCode">Category Code</label>
                    <input type="text" class="form-control  border-1" name="categoryCode" id="categoryCode" placeholder="Insert Category Name"
                        required>
                </div>
                <div class="form-group">
                    <label for="categoryParent">Category Parent</label>
                    <select class="form-control  border-1" name="categoryParent" id="categoryParent" required>
                        <option value="0" default >No parent</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->categoryName}}</option>

                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="categoryIcon">Category Icon</label>
                    <input type="text" class="form-control  border-1" name="categoryIcon" id="categoryIcon" placeholder="Insert Category Name"
                        required>
                </div>
                <div class="form-group">
                    <label for="categoryImage">Category Image</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="categoryImage" name="categoryImage" type="image">
                        <label class="custom-file-label" for="categoryImage">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="col-3">

                <div class="card shadow mb-4">
                    <a href="#saveOption" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="saveOption">
                        <h6 class="m-0 font-weight-bold text-primary">Options</h6>
                    </a>
                    <div class="collapse show text-center" id="saveOption">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success btn-block">
                                <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="text"> Save</span>
                            </button>
                            <a href="#" class="btn btn-secondary btn-block">
                                <span class="icon text-white-50">
                                    <i class="fas fa-trash"></i>
                                </span>
                                <span class="text"> Cancel</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
{{-- end of page content --}}
@endsection
 
@section('pagescript')
@endsection