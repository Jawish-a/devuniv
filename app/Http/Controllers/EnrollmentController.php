<?php

namespace App\Http\Controllers;

use App\enrollment;
use Illuminate\Http\Request;
use App\Student;
use App\Course;
use Alert;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = Student::get(['id', 'email'])->sortByDesc('id');
        $courses = Course::get(['id', 'courseTitle'])->sortByDesc('courseTitle');

        return view('enrollment.index')->with('students', $students)->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $students = Student::get(['id', 'email'])->sortByDesc('id');
        $courses = Course::get(['id', 'courseTitle'])->sortByDesc('courseTitle');

        return view('enrollment.create')->with('students', $students)->with('courses', $courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $enroll = new Enrollment;
        $enroll->student_id = $request->student_id;
        $enroll->course_id = $request->course_id;
        $enroll->save();
        Alert::success('Student has been enrolled!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function show(enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function edit(enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\enrollment  $enrollment
     * @return \Illuminate\Http\Response
     */
    public function destroy(enrollment $enrollment)
    {
        //
    }
}
