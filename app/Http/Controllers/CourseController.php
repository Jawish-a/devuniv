<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;
use App\Category;
use Alert;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $courses = Course::all();
        return view('course.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories = Category::where('categoryParent', '=', '0')->get();
        return view('course.create')->with('categories', $categories);
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
        $course = new Course();
        $course->courseTitle = $request->courseTitle;
        $course->courseShortDescription = $request->courseShortDescription;
        $course->courseSlug = $request->courseSlug;
        $course->courseDescription = $request->courseDescription;
        $course->courseLanguage = $request->courseLanguage;
        $course->category_id = $request->category_id;
        $course->courseIsFreeCourse = $request->courseIsFreeCourse;
        $course->coursePrice = $request->coursePrice;
        $course->courseHasDiscount = $request->courseHasDiscount;
        $course->courseDiscountAmount = $request->courseDiscountAmount;
        $course->user_id = $request->user_id;
        $course->courseThumbnail = $request->courseThumbnail;
        $course->courseStatus = $request->courseStatus;
        $course->courseLevel = $request->courseLevel;
        $course->courseHasAccesscode = $request->courseHasAccesscode;
        $course->save();
        Alert::success('Course has been Created!');
        return redirect('/admin/course');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        //

        return view('course.view', ['course' => Course::where('courseSlug', '=', $course->courseSlug)->firstOrFail()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //
    }
}
