<?php

declare(strict_types = 1);

namespace App\Shared\Infrastructure\Symfony;

use App\Shared\Domain\DomainError;
use App\Shared\Domain\Utils;
use Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;

final class ApiExceptionListener
{
    private ApiExceptionsHttpStatusCodeMapping $exceptionHandler;

    public function __construct(ApiExceptionsHttpStatusCodeMapping $exceptionHandler)
    {
        $this->exceptionHandler = $exceptionHandler;
    }

    public function onException(RequestEvent $event): void
    {

    }

    private function exceptionCodeFor(Exception $error): string
    {
        $domainErrorClass = DomainError::class;

        return $error instanceof $domainErrorClass ? $error->errorCode() : Utils::toSnakeCase(class_basename($error));
    }
}
