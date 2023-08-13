<?php

namespace App\Http\Controllers\Teach\Hometask;

use App\Http\Controllers\Controller;
use App\Http\Requests\Hometask\StoreRequest;

use App\Models\Hometask;
use Exception;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        try {
            DB::beginTransaction();
        Hometask::firstOrCreate($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollBack();
        }
        return redirect()->route('course.main.index');
    }
}
