<?php

declare(strict_types = 1);

namespace App\Backoffice\Courses\Infrastructure\Persistence;

use App\Backoffice\Courses\Domain\BackofficeCourse;
use App\Backoffice\Courses\Domain\BackofficeCourseRepository;
use App\Shared\Domain\Criteria\Criteria;
use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineCriteriaConverter;
use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

final class MySqlBackofficeCourseRepository extends DoctrineRepository implements BackofficeCourseRepository
{
    public function save(BackofficeCourse $course): void
    {
        $this->persist($course);
    }

    public function searchAll(): array
    {
        return $this->repository(BackofficeCourse::class)->findAll();
    }

    public function matching(Criteria $criteria): array
    {
        $doctrineCriteria = DoctrineCriteriaConverter::convert($criteria);

        return $this->repository(BackofficeCourse::class)->matching($doctrineCriteria)->toArray();
    }
}
