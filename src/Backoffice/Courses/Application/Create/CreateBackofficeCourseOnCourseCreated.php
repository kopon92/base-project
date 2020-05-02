<?php

declare(strict_types = 1);

namespace App\Backoffice\Courses\Application\Create;

use App\Mooc\Courses\Domain\CourseCreatedDomainEvent;
use App\Shared\Domain\Bus\Event\DomainEventSubscriber;

final class CreateBackofficeCourseOnCourseCreated implements DomainEventSubscriber
{
    private BackofficeCourseCreator $creator;

    public function __construct(BackofficeCourseCreator $creator)
    {
        $this->creator = $creator;
    }

    public static function subscribedTo(): array
    {
        return [CourseCreatedDomainEvent::class];
    }

    public function __invoke(CourseCreatedDomainEvent $event): void
    {
        $this->creator->create($event->aggregateId(), $event->name(), $event->duration());
    }
}
