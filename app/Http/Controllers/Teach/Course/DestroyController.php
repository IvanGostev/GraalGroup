<?php

namespace App\Http\Controllers\Teach\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\UserCourse;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Course $course)
    {
        $course->delete();
        return redirect()->route('teach.course.index');
    }
}
