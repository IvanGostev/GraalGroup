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

class CreateController extends Controller
{
    public function __invoke(Course $course,StatusHometask $hometask)
    {
        return view('checkHometask.main.create', compact('hometask', 'course'));
    }
}
