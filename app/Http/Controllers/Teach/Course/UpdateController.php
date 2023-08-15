<?php

namespace App\Http\Controllers\Teach\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\UpdateRequest;
use App\Models\Course;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Course $course): string
    {
        $data = $request->validated();
        try {
            DB::beginTransaction();
            if (isset($data['img'])) {
                $data['img'] = Storage::disk('public')->put('/images', $data['img']);
            }
            $course->update($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
        }
        return "OK";
    }
}

