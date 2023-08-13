<?php

namespace App\Http\Controllers\Teach\Hometask;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\UserCourse;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Hometask $hometask)
    {
        $hometask->delete();
        return redirect()->route('teach.course.index');
    }
}
