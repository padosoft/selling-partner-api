<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\OrdersV0\Dto;

use SellingPartnerApi\Dto;

final class ItemBuyerInfo extends Dto
{
    protected static array $attributeMap = [
        'buyerCustomizedInfo' => 'BuyerCustomizedInfo',
        'giftWrapPrice' => 'GiftWrapPrice',
        'giftWrapTax' => 'GiftWrapTax',
        'giftMessageText' => 'GiftMessageText',
        'giftWrapLevel' => 'GiftWrapLevel',
    ];

    /**
     * @param  ?BuyerCustomizedInfoDetail  $buyerCustomizedInfo  Buyer information for custom orders from the Amazon Custom program.
     * @param  ?Money  $giftWrapPrice  The monetary value of the order.
     * @param  ?Money  $giftWrapTax  The monetary value of the order.
     * @param  ?string  $giftMessageText  A gift message provided by the buyer.
     * @param  ?string  $giftWrapLevel  The gift wrap level specified by the buyer.
     */
    public function __construct(
        public readonly ?BuyerCustomizedInfoDetail $buyerCustomizedInfo = null,
        public readonly ?Money $giftWrapPrice = null,
        public readonly ?Money $giftWrapTax = null,
        public readonly ?string $giftMessageText = null,
        public readonly ?string $giftWrapLevel = null,
    ) {
    }
}
