@extends('admin') 
@section('pagecss')
@endsection
 
@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        Enroll a Student
    </h1>
    <form action="{{ action('EnrollmentController@store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="categoryParent">Student</label>
                            <select class="form-control  border-1" name="student_id" id="categoryParent" required>
                                <option default  >No Student</option>
                                @foreach ($students as $student)
                                    <option value="{{$student->id}}">{{$student->email}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="categoryParent">Course</label>
                            <select class="form-control  border-1" name="course_id" id="categoryParent" required>
                                <option default >No Course</option>
                                @if ($student->courses)
                                    
                                @endif
                                @foreach ($courses as $course)
                                    <option value="{{$course->id}}">{{$course->courseTitle}}</option>
                                @endforeach
                            </select>
                        </div>
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
@endsection
 
@section('pagescript')
@endsection