<?php

namespace App\Http\Controllers\Training\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Training\StoreRequest;
use App\Models\Course;
use App\Models\StatusHometask;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        $data['status'] = 1;
        StatusHometask::firstOrCreate($data);
        return back();

    }
}
