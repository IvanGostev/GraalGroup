<?php

namespace App\Http\Controllers\Teach\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $courses = Course::where('user_id', auth()->user()->id)->get();
        return view('teach.courses.index', compact('courses'));
    }
}
