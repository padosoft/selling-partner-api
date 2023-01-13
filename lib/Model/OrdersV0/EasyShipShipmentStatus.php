<?php
/**
 * EasyShipShipmentStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\OrdersV0;
use ArrayAccess;

use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * EasyShipShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description The status of the Amazon Easy Ship order. This property is included only for Amazon Easy Ship orders.
 * @package  SellingPartnerApi
 * @group 
 */
class EasyShipShipmentStatus
{
    public $value;

    /**
     * Possible values of this enum
     */
    const PENDING_SCHEDULE = 'PendingSchedule';
    const PENDING_PICK_UP = 'PendingPickUp';
    const PENDING_DROP_OFF = 'PendingDropOff';
    const LABEL_CANCELED = 'LabelCanceled';
    const PICKED_UP = 'PickedUp';
    const DROPPED_OFF = 'DroppedOff';
    const AT_ORIGIN_FC = 'AtOriginFC';
    const AT_DESTINATION_FC = 'AtDestinationFC';
    const DELIVERED = 'Delivered';
    const REJECTED_BY_BUYER = 'RejectedByBuyer';
    const UNDELIVERABLE = 'Undeliverable';
    const RETURNING_TO_SELLER = 'ReturningToSeller';
    const RETURNED_TO_SELLER = 'ReturnedToSeller';
    const LOST = 'Lost';
    const OUT_FOR_DELIVERY = 'OutForDelivery';
    const DAMAGED = 'Damaged';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::PENDING_SCHEDULE,
            self::PENDING_PICK_UP,
            self::PENDING_DROP_OFF,
            self::LABEL_CANCELED,
            self::PICKED_UP,
            self::DROPPED_OFF,
            self::AT_ORIGIN_FC,
            self::AT_DESTINATION_FC,
            self::DELIVERED,
            self::REJECTED_BY_BUYER,
            self::UNDELIVERABLE,
            self::RETURNING_TO_SELLER,
            self::RETURNED_TO_SELLER,
            self::LOST,
            self::OUT_FOR_DELIVERY,
            self::DAMAGED,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(function ($val) { return strtoupper($val); }, $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues(), true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value %s for enum 'EasyShipShipmentStatus', must be one of '%s'", $value, implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


