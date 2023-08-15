<?php

namespace App\Http\Controllers\Profile\Main;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $user)
    {
        $courses = Course::all();
        return view('profile.main.show', compact('user', 'courses'));
    }
}
