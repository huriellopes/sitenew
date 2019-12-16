<?php

namespace App\Interfaces\Users;

use App\Models\User;
use Illuminate\Support\Collection;
use stdClass;

interface UsersServiceInterface
{
    public function listUsers() : Collection;

    public function verifyLogin(stdClass $params) : User;

    public function newUser(stdClass $params) : User;

    public function show(User $user) : User;

    public function updateUser(User $user, stdClass $params) : User;

    public function inactiveUser(User $user) : User;
}
