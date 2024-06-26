<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\EasyShipV20220323\Dto;

use SellingPartnerApi\Dto;

final class TimeSlot extends Dto
{
    /**
     * @param  string  $slotId  A string of up to 255 characters.
     * @param  ?DateTime  $startTime  A datetime value in ISO 8601 format.
     * @param  ?DateTime  $endTime  A datetime value in ISO 8601 format.
     * @param  ?string  $handoverMethod  Identifies the method by which a seller will hand a package over to Amazon Logistics.
     */
    public function __construct(
        public readonly string $slotId,
        public readonly ?\DateTime $startTime = null,
        public readonly ?\DateTime $endTime = null,
        public readonly ?string $handoverMethod = null,
    ) {
    }
}
