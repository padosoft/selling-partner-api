<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FinancesV0\Dto;

use SellingPartnerApi\Dto;

final class CapacityReservationBillingEvent extends Dto
{
    protected static array $attributeMap = [
        'transactionType' => 'TransactionType',
        'postedDate' => 'PostedDate',
        'description' => 'Description',
        'transactionAmount' => 'TransactionAmount',
    ];

    /**
     * @param  ?string  $transactionType  Indicates the type of transaction. For example, FBA Inventory Fee
     * @param  ?DateTime  $postedDate
     * @param  ?string  $description  A short description of the capacity reservation billing event.
     * @param  ?Currency  $transactionAmount  A currency type and amount.
     */
    public function __construct(
        public readonly ?string $transactionType = null,
        public readonly ?\DateTime $postedDate = null,
        public readonly ?string $description = null,
        public readonly ?Currency $transactionAmount = null,
    ) {
    }
}
