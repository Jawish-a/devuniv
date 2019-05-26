@extends('admin') 
@section('pagecss')
@endsection
 
@section('content') {{-- start of page content --}}
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        Create New Course
    </h1>
    <form action="{{action('CourseController@store')}}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="1">
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="courseTitle">Course Title</label>
                    <input type="text" class="form-control  border-1" name="courseTitle" id="categoryName" placeholder="Insert Course Title"
                        required>
                </div>
                <div class="form-group">
                    <label for="courseShortDescription">Course Short Description</label>
                    <input type="text" class="form-control  border-1" name="courseShortDescription" id="courseShortDescription" placeholder="Insert Course Short Descreption"
                        required>
                </div>
                <div class="form-group">
                    <label for="courseDescription">Course Description</label>
                    <textarea class="form-control  border-1" name="courseDescription" id="courseDescription" cols="30" rows="10" required placeholder="Insert Course Descreption"></textarea>
                </div>
                <div class="form-group">
                    <label for="category_id">Category</label>
                    <select class="form-control  border-1" name="category_id" id="category_id" required>
                        <option value="0" default >No parent</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->categoryName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="coursePrice">Course Price</label>
                            <input type="number" class="form-control  border-1" name="coursePrice" id="categoryName" placeholder="Insert Course Price"
                                required>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="courseIsFreeCourse">Course is Free</label>
                            <select class="form-control border-1" name="courseIsFreeCourse" id="courseIsFreeCourse">
                                <option value="1">YES</option>
                                <option value="0" selected>NO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="courseHasDiscount">Course Has Discount</label>
                            <select class="form-control border-1" name="courseHasDiscount" id="courseHasDiscount">
                                <option value="1">YES</option>
                                <option value="0" selected>NO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="courseDiscountAmount">Course Discont Amount</label>
                            <input type="number" min="0" max="100" class="form-control  border-1" name="courseDiscountAmount" id="courseDiscountAmount"
                                placeholder="Insert Course Discount Amount" required>
                        </div>
                    </div>
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
                <div class="card shadow mb-4">
                    <a href="#courseLanguage" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="courseLanguage">
                        <h6 class="m-0 font-weight-bold text-primary">Course Language</h6>
                    </a>
                    <div class="collapse show" id="courseLanguage">
                        <div class="card-body">
                            <div class="form-group">
                                <select class="custom-select" name="courseLanguage" id="courseLanguage" required>
                                    <option selected value="ar">Arabic</option>
                                    <option value="en">English</option>
                                    <option value="es">Spanish</option>
                                    <option value="fr">French</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <a href="#courseThumbnail" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="courseThumbnail">
                        <h6 class="m-0 font-weight-bold text-primary">Course Thmbnail</h6>
                    </a>
                    <div class="collapse show" id="courseThumbnail">
                        <div class="card-body">
                            <div class="form-group">
                                {{-- iamge preview should be here --}}
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="courseThumbnail" name="courseThumbnail" type="image">
                                    <label class="custom-file-label" for="courseThumbnail">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <a href="#courseLevel" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="courseLevel">
                        <h6 class="m-0 font-weight-bold text-primary">Course Level</h6>
                    </a>
                    <div class="collapse show" id="courseLevel">
                        <div class="card-body">
                            <div class="form-group">
                                <select class="custom-select" name="courseLevel" id="courseLevel" required>
                                    <option value="a" selected>A</option>
                                    <option value="b">B</option>
                                    <option value="c">C</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <a href="#courseStatus" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="courseStatus">
                        <h6 class="m-0 font-weight-bold text-primary">Course Active</h6>
                    </a>
                    <div class="collapse show" id="courseStatus">
                        <div class="card-body">
                            <div class="form-group">
                                <select class="custom-select" name="courseStatus" id="courseStatus" required>
                                    <option value="1" selected>YES</option>
                                    <option value="0">NO</option>
                                </select>
                            </div>
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