<?php

namespace App\Http\Controllers\Course\MyCourses;

use App\Http\Controllers\Controller;
use App\Models\Course;

class IndexController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();
        for ($i = 0; $i < count($courses); $i++) {
            if ($courses[$i]->tied->user_id !== auth()->user()->id) {
                unset($courses[$i]);
            }
        }

        return view('courses.my.index', compact('courses'));
    }
}
