<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV20211228\Responses;

use SellingPartnerApi\Response;

final class TransactionId extends Response
{
    /**
     * @param  ?string  $transactionId  GUID assigned by Amazon to identify this transaction. This value can be used with the Transaction Status API to return the status of this transaction.
     */
    public function __construct(
        public readonly ?string $transactionId = null,
    ) {
    }
}
