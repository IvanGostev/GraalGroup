<?php

namespace App\Http\Controllers\Teach\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Lesson $thisLesson, Course $course)
    {
        $lessons = Lesson::where('course_id', $course->id)->get();

        return view('teach.lesson.edit', compact('course', 'lessons', 'thisLesson'));
    }
}
