<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\OrdersV1\Dto;

use SellingPartnerApi\Dto;

final class AcknowledgementStatusDetails extends Dto
{
    /**
     * @param  ?DateTime  $acknowledgementDate  The date when the line item was confirmed by vendor. Must be in ISO-8601 date/time format.
     * @param  ?ItemQuantity  $acceptedQuantity  Details of quantity ordered.
     * @param  ?ItemQuantity  $rejectedQuantity  Details of quantity ordered.
     */
    public function __construct(
        public readonly ?\DateTime $acknowledgementDate = null,
        public readonly ?ItemQuantity $acceptedQuantity = null,
        public readonly ?ItemQuantity $rejectedQuantity = null,
    ) {
    }
}
