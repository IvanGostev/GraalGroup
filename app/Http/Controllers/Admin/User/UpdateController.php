<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Exception;

class UpdateController  extends Controller
{
    public function __invoke(UpdateRequest $request, User $user)
    {
        $data = $request->validated();
            unset($data['user_id']);
            $user->update($data);

        return view('admin.user.show', compact('user'));
    }
}

