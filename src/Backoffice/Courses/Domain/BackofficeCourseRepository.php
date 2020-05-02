<?php

declare(strict_types = 1);

namespace App\Backoffice\Courses\Domain;

use App\Shared\Domain\Criteria\Criteria;

interface BackofficeCourseRepository
{
    public function save(BackofficeCourse $course): void;

    public function searchAll(): array;

    public function matching(Criteria $criteria): array;
}
