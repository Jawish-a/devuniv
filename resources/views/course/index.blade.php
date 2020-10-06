@extends('admin') 
@section('pagecss')
@endsection
 
@section('content') {{-- start of page content --}}
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Courses</h1>
    <br>
    <div class="row">
        @if (count($courses) === 0)
        <h3>no cats please adopte some cats</h3>
        @else @foreach ($courses as $course)
        <div class="col-lg-4">
            <div class="card mb-4 py-3 border-bottom-primary">
                <div class="card-body text-center">
                    <a href="{{url("/admin/course/{$course->courseSlug} ")}}">
                        <h5 class="text-primary">{{$course->courseTitle}}</h5>
                    </a>
                    <hr>
                    <span>{{$course->coursePrice}} S.R.</span>
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
