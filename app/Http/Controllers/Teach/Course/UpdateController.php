<?php

namespace App\Http\Controllers\Teach\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\UpdateRequest;
use App\Models\Course;

class UpdateController  extends Controller
{
    public function __invoke(UpdateRequest $request, Course $course): string
    {

        $data = $request->validated();

        $course->update($data);

        return "OK";
    }
}

