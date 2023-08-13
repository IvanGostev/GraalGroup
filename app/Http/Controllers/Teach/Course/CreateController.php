<?php

namespace App\Http\Controllers\Teach\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
       return view('teach.courses.create');
    }
}
