<?php

namespace App\Repositories\Storage;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class EloquentUserRepository implements UserRepositoryInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        return $user;
    }

    /**
     * @param $username
     * @return mixed
     */
    public function findByUsername($username)
    {
        return User::where('username', $username)->first();
    }
}
