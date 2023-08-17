<?php

namespace App\Http\Controllers\CheckHometask\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\checkHometask\UpdateRequest;
use App\Models\Course;
use App\Models\Hometask;
use App\Models\StatusHometask;


class UpdateController extends Controller
{
    public function __invoke(Course $course, StatusHometask $hometask, UpdateRequest $request ,)
    {
        $data = $request->validated();
        $hometask->update($data);


        $hometasks = Hometask::where('user_id', auth()->user()->id);
        return back();
    }
}
