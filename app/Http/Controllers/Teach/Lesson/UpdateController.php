<?php

namespace App\Http\Controllers\Teach\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\UpdateRequest;
use App\Models\Lesson;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Lesson $lesson)
    {
        $data = $request->validated();
        $lesson->update($data);
        return redirect()->route('course.main.index');
    }
}

