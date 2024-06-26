<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class AppointmentSlot extends Dto
{
    /**
     * @param  string  $slotId  An identifier to a self-ship appointment slot.
     * @param  AppointmentSlotTime  $slotTime  An appointment slot time with a start and end.
     */
    public function __construct(
        public readonly string $slotId,
        public readonly AppointmentSlotTime $slotTime,
    ) {
    }
}
