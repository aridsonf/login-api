<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Services\UserService;
use App\Http\Requests\UserRegistrationRequest;

class RegisterController extends Controller
{
    /**
     * @var UserService
     */
    protected $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @param UserRegistrationRequest $request
     * @return UserResource
     */
    public function register(UserRegistrationRequest $request)
    {
        $validatedData = $request->validated();
        $user = $this->userService->createUser($validatedData);
        $user->showId = true;

        return new UserResource($user);
    }
}
