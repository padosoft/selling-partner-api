<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use SellingPartnerApi\Dto;

final class ShippingOfferingFilter extends Dto
{
    protected static array $attributeMap = [
        'includePackingSlipWithLabel' => 'IncludePackingSlipWithLabel',
        'includeComplexShippingOptions' => 'IncludeComplexShippingOptions',
        'carrierWillPickUp' => 'CarrierWillPickUp',
        'deliveryExperience' => 'DeliveryExperience',
    ];

    /**
     * @param  ?bool  $includePackingSlipWithLabel  When true, include a packing slip with the label.
     * @param  ?bool  $includeComplexShippingOptions  When true, include complex shipping options.
     * @param  ?string  $carrierWillPickUp  Carrier will pick up option.
     * @param  ?string  $deliveryExperience  The delivery confirmation level.
     */
    public function __construct(
        public readonly ?bool $includePackingSlipWithLabel = null,
        public readonly ?bool $includeComplexShippingOptions = null,
        public readonly ?string $carrierWillPickUp = null,
        public readonly ?string $deliveryExperience = null,
    ) {
    }
}
