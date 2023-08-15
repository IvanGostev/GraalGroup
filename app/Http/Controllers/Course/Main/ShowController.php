<?php

namespace App\Http\Controllers\Course\Main;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(Course $course)
    {
        $courses = User::where('id', '!=', $course->id)
            ->get()
            ->take(3);
        return view('courses.main.show', compact('course', 'courses'));
    }
}
