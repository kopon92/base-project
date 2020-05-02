<?php

declare(strict_types = 1);

namespace App\Backoffice\Auth\Infrastructure\Persistence;

use App\Backoffice\Auth\Domain\AuthPassword;
use App\Backoffice\Auth\Domain\AuthRepository;
use App\Backoffice\Auth\Domain\AuthUser;
use App\Backoffice\Auth\Domain\AuthUsername;
use function Lambdish\Phunctional\get;

final class InMemoryAuthRepository implements AuthRepository
{
    private const USERS = [
        'javi' => 'barbitas',
        'rafa' => 'pelazo',
    ];

    public function search(AuthUsername $username): ?AuthUser
    {
        $password = get($username->value(), self::USERS);

        return null !== $password ? new AuthUser($username, new AuthPassword($password)) : null;
    }
}
