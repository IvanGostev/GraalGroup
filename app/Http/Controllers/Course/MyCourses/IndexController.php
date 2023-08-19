<?php

namespace App\Http\Controllers\Course\MyCourses;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\UserCourse;


class IndexController extends Controller
{
    public function __invoke()
    {

        $count = UserCourse::where('user_id', auth()->user()->id)->count();
        if ($count != 0) {
            $coursesTemp = UserCourse::where('user_id', auth()->user()->id)->get();
            $courses = null;
            foreach ($coursesTemp as $course) {
                $courses[] = Course::where('id', $course->course_id)->get();
            }
            $courses = $courses[0];
            return view('courses.my.index', compact('courses'));
        } else {
            return view('courses.my.adsence');
        }

    }
}
