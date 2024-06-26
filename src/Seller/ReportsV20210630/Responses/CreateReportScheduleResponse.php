<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ReportsV20210630\Responses;

use SellingPartnerApi\Response;

final class CreateReportScheduleResponse extends Response
{
    /**
     * @param  string  $reportScheduleId  The identifier for the report schedule. This identifier is unique only in combination with a seller ID.
     */
    public function __construct(
        public readonly string $reportScheduleId,
    ) {
    }
}
