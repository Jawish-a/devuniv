@extends('admin') 
@section('pagecss')
@endsection
 
@section('content') {{-- start of page content --}}
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">
        Create New Student
    </h1>
    <form action="{{action('StudentController@store')}}" method="post">
        @csrf
        <input type="hidden" name="user_id" value="1">
        <div class="row">
            <div class="col-lg-9">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control  border-1" name="firstName" id="firstName" placeholder="Insert Student First Name"
                        required>
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control  border-1" name="lastName" id="lastName" placeholder="Insert Student Last Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Student email</label>
                    <input type="email" class="form-control  border-1" name="email" id="email" placeholder="Insert Student email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control  border-1" name="password" id="password" placeholder="Insert Student Password"
                        required>
                </div>
                <div class="form-group">
                    <label for="mobileNumber">Student Mobile Number</label>
                    <input type="text" class="form-control  border-1" name="mobileNumber" id="mobileNumber" placeholder="Insert Student Mobile Number"
                        required>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select class="form-control border-1" name="gender" id="gender">
                                <option value="female">Female</option>
                                <option value="male" selected>Male</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="birthDate">Student Birth Date</label>
                            <input type="date" class="form-control  border-1" name="birthDate" id="birthDate" placeholder="Insert Birth Date" required>
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
                    <a href="#language" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="language">
                        <h6 class="m-0 font-weight-bold text-primary">Language</h6>
                    </a>
                    <div class="collapse show" id="language">
                        <div class="card-body">
                            <div class="form-group">
                                <select class="custom-select" name="language" id="language" required>
                                    <option selected value="ar">Arabic</option>
                                    <option value="en">English</option>
                                    <option value="es">Spanish</option>
                                    <option value="fr">French</option>
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