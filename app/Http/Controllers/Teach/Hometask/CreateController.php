<?php

namespace App\Http\Controllers\Teach\Hometask;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Hometask;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke(Course $course)
    {
       $hometasks = Hometask::where('course_id', $course->id)->get();
       return view('teach.lesson.create', compact('course', 'hometasks'));
    }
}
