<?php

namespace App\Http\Controllers\Teach\Lesson;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lesson\StoreRequest;
use App\Models\Lesson;
use Exception;
use Illuminate\Support\Facades\DB;



class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        try {
            DB::beginTransaction();
        Lesson::firstOrCreate($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
        }
        return redirect()->route('course.main.index');
    }
}
