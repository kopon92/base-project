<?php

declare(strict_types = 1);

namespace App\Backoffice\Courses\Application\Create;

use App\Backoffice\Courses\Domain\BackofficeCourse;
use App\Backoffice\Courses\Domain\BackofficeCourseRepository;

final class BackofficeCourseCreator
{
    private BackofficeCourseRepository $repository;

    public function __construct(BackofficeCourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(string $id, string $name, string $duration): void
    {
        $this->repository->save(new BackofficeCourse($id, $name, $duration));
    }
}
