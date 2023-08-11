<?php

namespace App\Http\Controllers\Admin\Main;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $data = [];
        $data['usersCount'] = User::all()->count(); // count считает количество
        $data['coursesCount'] = Course::all()->count();
       return view('admin.main.index', compact('data'));
    }
}
