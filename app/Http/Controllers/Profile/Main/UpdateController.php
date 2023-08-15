<?php

namespace App\Http\Controllers\Profile\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UpdateController  extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
            if (isset($data['img'])) {
                $data['img'] = Storage::disk('public')->put('/images', $data['img']);
            }
            $user->update($data);
        return "OK";
    }
}

