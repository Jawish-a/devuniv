@extends('admin') 
@section('pagecss')
@endsection
 
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Course Title: {{$course->courseTitle}}</h1>
    <br>
    <div class="row">
        <div class="col-lg-9 col-md-6 mb-4">
            @if (count($course->sections) === 0)
            <h3>no cats please adopt new cats</h3>
            @else @foreach ($course->sections as $section)
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapse{{$section->sectionTitle}}Card" class="d-block card-header py-3 collapsed" data-toggle="collapse" role="button"
                    aria-expanded="false" aria-controls="collapse{{$section->sectionTitle}}Card">
                    <h6 class="m-0 font-weight-bold text-primary">{{$section->sectionTitle}}</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapse{{$section->sectionTitle}}Card" style="">
                    <div class="card-body">
                        <div class="text-center">
                            <a href="{{route('course.section.lesson.create',[$course->id, $section->id])}}" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-info-circle"></i>
                            </span>
                            <span class="text">Create New Lesson</span>
                            </a>
                        </div>
                        <hr> @foreach ($section->lessons as $lesson)
                        <div class="card mb-1 py-0 border-left-success">
                            <a href="{{route('course.section.lesson.show', [$course->id ,$section->id , $lesson->id])}}">
                                <div class="card-body">
                                    <i class="{{$lesson->lessonType}} fa-1x"></i> | {{$lesson->lessonTitle}}
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach @endif
        </div>
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Options</h6>
                </div>
                <div class="card-body">
                    <a href="{{url("/admin/course/{$course->id}/section/create")}}" class="btn btn-info btn-block"><i class="fas fa-plus-circle"></i> add new section</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 
@section('pagescript')
@endsection