<?php

declare(strict_types = 1);

namespace App\Backoffice\Courses\Application\SearchAll;

use App\Backoffice\Courses\Application\BackofficeCourseResponse;
use App\Backoffice\Courses\Application\BackofficeCoursesResponse;
use App\Backoffice\Courses\Domain\BackofficeCourse;
use App\Backoffice\Courses\Domain\BackofficeCourseRepository;
use function Lambdish\Phunctional\map;

final class AllBackofficeCoursesSearcher
{
    private BackofficeCourseRepository $repository;

    public function __construct(BackofficeCourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function searchAll(): BackofficeCoursesResponse
    {
        return new BackofficeCoursesResponse(...map($this->toResponse(), $this->repository->searchAll()));
    }

    private function toResponse(): callable
    {
        return static fn(BackofficeCourse $course) => new BackofficeCourseResponse(
            $course->id(),
            $course->name(),
            $course->duration()
        );
    }
}
