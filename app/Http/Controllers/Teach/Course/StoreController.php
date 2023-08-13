<?php

namespace App\Http\Controllers\Teach\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreRequest;
use App\Models\Course;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;
        try {
            DB::beginTransaction(); //Начала транзакции (Транзакция метод отправки много запросов одновремено в случие искличений откат)
        if (isset($data['img'])) {
            $data['img'] = Storage::disk('public')->put('/images', $data['img']);
        }
        Course::firstOrCreate($data);
            DB::commit(); // В случае успеха завершить
        } catch (Exception $exception) {
            DB::rollBack(); // В случае исключения откатить
        }
        return "OK";
    }
}
