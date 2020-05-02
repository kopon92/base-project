<?php

declare(strict_types = 1);

namespace App\Backoffice\Courses\Application\SearchByCriteria;

use App\Backoffice\Courses\Application\BackofficeCourseResponse;
use App\Backoffice\Courses\Application\BackofficeCoursesResponse;
use App\Backoffice\Courses\Domain\BackofficeCourse;
use App\Backoffice\Courses\Domain\BackofficeCourseRepository;
use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Domain\Criteria\Filters;
use App\Shared\Domain\Criteria\Order;
use function Lambdish\Phunctional\map;

final class BackofficeCoursesByCriteriaSearcher
{
    private BackofficeCourseRepository $repository;

    public function __construct(BackofficeCourseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function search(Filters $filters, Order $order, ?int $limit, ?int $offset): BackofficeCoursesResponse
    {
        $criteria = new Criteria($filters, $order, $offset, $limit);

        return new BackofficeCoursesResponse(...map($this->toResponse(), $this->repository->matching($criteria)));
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
