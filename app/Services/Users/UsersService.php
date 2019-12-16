<?php

namespace App\Services\Users;

use App\Interfaces\Users\UsersRepositoryInterface;
use App\Interfaces\Users\UsersServiceInterface;
use App\Models\User;
use App\Validates\Users\UsersValidate;
use Exception;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use stdClass;

class UsersService implements UsersServiceInterface
{
    protected $usersValidate;
    protected $usersRepositoryInterface;

    public function __construct(UsersValidate $usersValidate,
                                UsersRepositoryInterface $usersRepositoryInterface)
    {
        $this->usersValidate = $usersValidate;
        $this->usersRepositoryInterface = $usersRepositoryInterface;
    }

    /**
     * Lista todos os usuários
     *
     * @return Collection
     */
    public function listUsers() : Collection
    {
        try {
            return $this->usersRepositoryInterface->listUsers();
        } catch (Exception $exception) {
            throw new Exception('Erro ao listar os usuários!', 400);
        }
    }

    /**
     * Verifica o login
     *
     * @param stdClass $params
     * @return User
     */
    public function verifyLogin(stdClass $params) : User
    {
        try {
            $this->usersValidate->validaEmail($params->email);
            $this->usersValidate->validaVerifyLogin($params);

            $login = $this->usersRepositoryInterface->verifyLogin($params);

            if ($params->email == $login->email && $params->password == $login->password) {
                return $login;
            }

            return false;
        } catch (Exception $exception) {
            dd($exception->getMessage());
            throw new Exception('Erro ao verificar o login!', 400);
        }
    }

    /**
     * Cadasrta um usuário
     *
     * @param stdClass $params
     * @return User
     */
    public function newUser(stdClass $params) : User
    {
        try {
            $this->usersValidate->validaAll($params);

            return $this->usersRepositoryInterface->newUser($params);
        } catch (Exception $exception) {
            throw new Exception('Erro ao cadastrar o usuário', 400);
        }
    }

    /**
     * Visualiza o usuário
     *
     * @param User $user
     * @return User
     */
    public function show(User $user) : User
    {
        try {
            return $this->usersRepositoryInterface->show($user);
        } catch (Exception $exception) {
            throw new Exception('Erro ao visualizar o usuário', 400);
        }
    }

    /**
     * Atualiza o usuários
     *
     * @param User $user
     * @param stdClass $params
     * @return User
     */
    public function updateUser(User $user, stdClass $params) : User
    {
        try {
            $this->usersValidate->validaAll($params);

            return $this->usersRepositoryInterface->updateUser($user, $params);
        } catch (Exception $exception) {
            throw new Exception('Erro ao atualizar o usuário!', 400);
        }
    }

    public function inactiveUser(User $user) : User
    {
        try {
            return $this->usersRepositoryInterface->inactiveUser($user);
        } catch (Exception $exception) {
            throw new Exception('Erro ao desativar o usuário!', 400);
        }
    }
}
