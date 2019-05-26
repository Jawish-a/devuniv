@extends('admin') 
@section('pagecss')
@endsection
 
@section('content') {{-- start of page content --}}
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        Create New Section | {{$course->courseTitle}}
    </h1>
    <form action="{{ action('SectionController@store', $course)}}" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="sectionTitle">Section Title</label>
                    <input type="text" class="form-control  border-1" name="sectionTitle" id="sectionTitle" placeholder="Insert Section Title"
                        required>
                </div>
                <div class="form-group">
                    <a href=""></a>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card shadow mb-4">
                    <a href="#saveOption" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="saveOption">
                        <h6 class="m-0 font-weight-bold text-primary">Options</h6>
                    </a>
                    <div class="collapse show text-center" id="saveOption">
                        <div class="card-body">
                            <button type="submit" class="btn btn-success btn-block">
                                <span class="icon text-white-50"><i class="fas fa-check"></i></span>
                                <span class="text"> Save</span>
                            </button>
                            <a href="#" class="btn btn-secondary btn-block">
                                <span class="icon text-white-50"><i class="fas fa-trash"></i></span>
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