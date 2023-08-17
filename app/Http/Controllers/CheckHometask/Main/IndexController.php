<?php

namespace App\Http\Controllers\CheckHometask\Main;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Hometask;
use App\Models\Lesson;
use App\Models\StatusHometask;
use App\Models\UserCourse;
use App\Models\UserHometask;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Course $course)
    {
        $hometasks = StatusHometask::where('course_id', $course->id)
            ->where('user_id', $course->user_id)->get();
        return view('checkHometask.main.index', compact('course', 'hometasks'));
    }
}
