<?php

namespace App\Http\Controllers\Teach\Hometask;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hometask\UpdateRequest;
use App\Models\Hometask;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Hometask $hometask)
    {
        $data = $request->validated();
        $hometask->update($data);
        return redirect()->route('course.main.index');
    }
}

