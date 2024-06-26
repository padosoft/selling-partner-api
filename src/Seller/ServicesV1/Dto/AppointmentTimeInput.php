<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ServicesV1\Dto;

use SellingPartnerApi\Dto;

final class AppointmentTimeInput extends Dto
{
    /**
     * @param  DateTime  $startTime  The date, time in UTC for the start time of an appointment in ISO 8601 format.
     * @param  ?int  $durationInMinutes  The duration of an appointment in minutes.
     */
    public function __construct(
        public readonly \DateTime $startTime,
        public readonly ?int $durationInMinutes = null,
    ) {
    }
}
