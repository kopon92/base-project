<?php

declare(strict_types = 1);

namespace App\Backoffice\Auth\Application\Authenticate;

use App\Backoffice\Auth\Domain\AuthPassword;
use App\Backoffice\Auth\Domain\AuthRepository;
use App\Backoffice\Auth\Domain\AuthUser;
use App\Backoffice\Auth\Domain\AuthUsername;
use App\Backoffice\Auth\Domain\InvalidAuthCredentials;
use App\Backoffice\Auth\Domain\InvalidAuthUsername;

final class UserAuthenticator
{
    private AuthRepository $repository;

    public function __construct(AuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function authenticate(AuthUsername $username, AuthPassword $password): void
    {
        $auth = $this->repository->search($username);

        $this->ensureUserExist($auth, $username);
        $this->ensureCredentialsAreValid($auth, $password);
    }

    private function ensureUserExist(?AuthUser $auth, AuthUsername $username): void
    {
        if (null === $auth) {
            throw new InvalidAuthUsername($username);
        }
    }

    private function ensureCredentialsAreValid(AuthUser $auth, AuthPassword $password): void
    {
        if (!$auth->passwordMatches($password)) {
            throw new InvalidAuthCredentials($auth->username());
        }
    }
}
