<?php

namespace App\Http\Controllers\Teach\Lesson;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\UserCourse;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Lesson $lesson)
    {
        $lesson->delete();
        return redirect()->route('teach.course.index');
    }
}
