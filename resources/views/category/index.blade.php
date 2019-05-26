@extends('admin') 
@section('pagecss')
@endsection
 
@section('content') {{-- start of page content --}}
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Categories</h1>
    <br>
    <div class="row">
        @if (count($categories) === 0)
        <h3>no cats please adopte some cats</h3>
        @else @foreach ($categories as $category)
        <div class="col-lg-4">
            <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body text-center">
                    <h1><i class="{{$category->categoryIcon}}"></i></h1>
                    <br>
                    <h5 class="text-primary">{{$category->categoryName}}</h5>
                    <hr>
                    <span>Number of Courses: {{count($category->courses)}}</span>
                </div>
            </div>
        </div>
        @endforeach @endif
    </div>
</div>

{{-- end of page content --}}
@endsection
 
@section('pagescript')
@endsection