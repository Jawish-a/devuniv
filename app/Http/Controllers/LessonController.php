<?php

namespace App\Http\Controllers;

use App\lesson;
use Illuminate\Http\Request;
use App\Section;
use App\Course;
use Alert;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($section, $course)
    {
        //
        return view('lesson.create', compact('course', 'section'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($course, $section, Request $request)
    {
        //
        $lesson = new Lesson;
        $lesson->lessonTitle = $request->lessonTitle;
        $lesson->lessonDuration = $request->lessonDuration;
        $lesson->course_id = $course;
        $lesson->section_id = $section;
        $lesson->lessonType = $request->lessonType;
        $lesson->lessonVideoLink = $request->lessonVideoLink;
        $lesson->lessonContent = $request->lessonContent;
        $lesson->lessonSummary = $request->lessonSummary;
        $lesson->lessonAttachment = $request->lessonAttachment;
        $lesson->lessonAttachmentType = $request->lessonAttachmentType;
        $lesson->save();
        Alert::success('Course has been Created!');
        return redirect('/admin/course/' . $course . '/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show($course, $section, lesson $lesson)
    {
        //
        return view('lesson.view', ['lesson' => Lesson::findOrFail($lesson->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit(lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lesson $lesson)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(lesson $lesson)
    {
        //
    }
}
