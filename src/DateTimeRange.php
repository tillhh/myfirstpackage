<?php

declare(strict_types=1);

namespace DateRanger;

class DateTimeRange
{
    /**
     * @var DateTimeImmutable
     */
    private DateTimeImmutable $dateTime;

    public function __construct(DateTimeImmutable $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return DateTimeImmutable
     */
    public function getDateTime(): DateTimeImmutable
    {
        return $this->dateTime;
    }
}
