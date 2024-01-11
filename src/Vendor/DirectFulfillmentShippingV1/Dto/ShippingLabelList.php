<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShippingLabelList extends BaseDto
{
    protected static array $complexArrayTypes = ['shippingLabels' => [ShippingLabel::class]];

    /**
     * @param  ?Pagination  $pagination
     * @param  ShippingLabel[]  $shippingLabels
     * @param  ?mixed  $additionalProperties
     */
    public function __construct(
        public readonly ?Pagination $pagination = null,
        public readonly ?array $shippingLabels = null,
        mixed ...$additionalProperties,
    ) {
        parent::__construct(...$additionalProperties);
    }
}
