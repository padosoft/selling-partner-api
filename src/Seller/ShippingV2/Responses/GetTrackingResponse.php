<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetTrackingResult;

final class GetTrackingResponse extends Response
{
    /**
     * @param  ?GetTrackingResult  $payload  The payload for the getTracking operation.
     */
    public function __construct(
        public readonly ?GetTrackingResult $payload = null,
    ) {
    }
}
