<?php

namespace App\Http\Controllers\Course\Main;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();
        return view('courses.main.index', compact('courses'));
    }
}
