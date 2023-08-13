<?php

namespace App\Http\Controllers\Teach\Hometask;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Hometask;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Hometask $thisHometask, Course $course)
    {
        $hometasks = Hometask::where('course_id', $course->id)->get();

        return view('teach.lesson.edit', compact('course', 'hometasks', 'thisHometask'));
    }
}
