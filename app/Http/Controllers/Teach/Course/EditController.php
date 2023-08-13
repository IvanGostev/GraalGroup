<?php

namespace App\Http\Controllers\Teach\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Course $course)
    {

        return view('teach.courses.edit', compact('course'));
    }
}
