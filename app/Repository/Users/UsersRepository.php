<?php

namespace App\Repository\Users;

use App\Interfaces\Users\UsersRepositoryInterface;
use App\Models\User;
use Illuminate\Support\Collection;
use stdClass;

class UsersRepository implements UsersRepositoryInterface
{
    /**
     * Lista todos os usuários no dashboard
     *
     * @return Collection
     */
    public function listUsers() : Collection
    {
        return User::all();
    }

    /**
     * Verifica o login
     *
     * @param stdClass $params
     * @return User
     */
    public function verifyLogin(stdClass $params) : User
    {
        return User::where('email', $params->email)
              ->where('password', $params->password)
              ->whereIn('idnivel', [1,2])
              ->where('ativo', 1)->first();
    }

    /**
     * Novo Usuário
     *
     * @param stdClass $params
     * @return User
     */
    public function newUser(stdClass $params) : User
    {
        $user = new User([
            'nome' => $params->nome,
            'email' => $params->email,
            'password' => $params->password,
            'ativo' => 1,
            'idnivel' => $params->idnivel
        ]);

        $user->save();

        return $user;
    }

    /**
     * Visualiza os dados do usuário
     *
     * @param User $user
     * @return User
     */
    public function show(User $user) : User
    {
        return $user;
    }

    /**
     * Atualiza os dados do usuário
     *
     * @param User $user
     * @param stdClass $params
     * @return User
     */
    public function updateUser(User $user, stdClass $params) : User
    {
        $user->update([
            'nome' => $params->nome,
            'email' => $params->email,
            'password' => $params->password,
            'idnivel' => $params->idnivel
        ]);

        return $user;
    }

    /**
     * Desativa o usuário da plataforma
     *
     * @param User $user
     * @return User
     */
    public function inactiveUser(User $user) : User
    {
        $user->update([
            'ativo' => 0,
        ]);

        return $user;
    }
}
