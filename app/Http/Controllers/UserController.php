<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return UserResource
     */
    public function profile(Request $request)
    {
        $user = $request->user();
        $user->showId = true;

        return new UserResource($user);
    }
}
