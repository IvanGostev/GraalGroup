<?php

namespace App\Http\Controllers\CheckHometask\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\checkHometask\UpdateRequest;
use App\Models\Course;
use App\Models\Hometask;
use App\Models\StatusHometask;


class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Course $course, StatusHometask $hometask)
    {
        $data = $request->validated();
        $hometask->update($data);

        $hometasks = Hometask::where('user_id', auth()->user()->id);
        return redirect()->route('teach.course.index', $hometasks);

    }
}
