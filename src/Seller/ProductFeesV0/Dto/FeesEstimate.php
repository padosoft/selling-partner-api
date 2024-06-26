<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\ProductFeesV0\Dto;

use SellingPartnerApi\Dto;

final class FeesEstimate extends Dto
{
    protected static array $attributeMap = [
        'timeOfFeesEstimation' => 'TimeOfFeesEstimation',
        'totalFeesEstimate' => 'TotalFeesEstimate',
        'feeDetailList' => 'FeeDetailList',
    ];

    protected static array $complexArrayTypes = ['feeDetailList' => [FeeDetail::class]];

    /**
     * @param  DateTime  $timeOfFeesEstimation  The time at which the fees were estimated. This defaults to the time the request is made.
     * @param  ?MoneyType  $totalFeesEstimate
     * @param  FeeDetail[]|null  $feeDetailList  A list of other fees that contribute to a given fee.
     */
    public function __construct(
        public readonly \DateTime $timeOfFeesEstimation,
        public readonly ?MoneyType $totalFeesEstimate = null,
        public readonly ?array $feeDetailList = null,
    ) {
    }
}
