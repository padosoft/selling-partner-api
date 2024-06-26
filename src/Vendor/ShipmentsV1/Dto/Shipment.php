<?php

declare(strict_types=1);

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use SellingPartnerApi\Dto;

final class Shipment extends Dto
{
    protected static array $complexArrayTypes = [
        'shipmentStatusDetails' => [ShipmentStatusDetails::class],
        'purchaseOrders' => [PurchaseOrders::class],
        'containers' => [Containers::class],
    ];

    /**
     * @param  string  $vendorShipmentIdentifier  Unique Transportation ID created by Vendor (Should not be used over the last 365 days).
     * @param  string  $transactionType  Indicates the type of  transportation request such as (New,Cancel,Confirm and PackageLabelRequest). Each transactiontype has a unique set of operation and there are corresponding details to be populated for each operation.
     * @param  DateTime  $transactionDate  Date on which the transportation request was submitted.
     * @param  ?string  $buyerReferenceNumber  The buyer Reference Number is a unique identifier generated by buyer for all Collect/WePay shipments when you submit a transportation request. This field is mandatory for Collect/WePay shipments.
     * @param  ?string  $currentShipmentStatus  Indicates the current shipment status.
     * @param  ?DateTime  $currentshipmentStatusDate  Date and time when the last status was updated.
     * @param  ShipmentStatusDetails[]|null  $shipmentStatusDetails  Indicates the list of current shipment status details and when the last update was received from carrier this is available on shipment Details response.
     * @param  ?DateTime  $shipmentCreateDate  The date and time of the shipment request created by vendor.
     * @param  ?DateTime  $shipmentConfirmDate  The date and time of the departure of the shipment from the vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the Buyer destination warehouse, whichever is sooner. Shipped date mentioned in the shipment confirmation should not be in the future.
     * @param  ?DateTime  $packageLabelCreateDate  The date and time of the package label created for the shipment by buyer.
     * @param  ?string  $shipmentFreightTerm  Indicates if this transportation request is WePay/Collect or TheyPay/Prepaid. This is a mandatory information.
     * @param  ?TransportShipmentMeasurements  $shipmentMeasurements  Shipment measurement details.
     * @param  ?CollectFreightPickupDetails  $collectFreightPickupDetails  Transport Request pickup date from Vendor Warehouse by Buyer
     * @param  PurchaseOrders[]|null  $purchaseOrders  Indicates the purchase orders involved for the transportation request. This group is an array create 1 for each PO and list their corresponding items. This information is used for deciding the route,truck allocation and storage efficiently. This is a mandatory information for Buyer performing transportation from vendor warehouse (WePay/Collect)
     * @param  ?ImportDetails  $importDetails
     * @param  Containers[]|null  $containers  A list of the items in this transportation and their associated inner container details. If any of the item detail fields are common at a carton or a pallet level, provide them at the corresponding carton or pallet level.
     * @param  ?TransportationDetails  $transportationDetails
     */
    public function __construct(
        public readonly string $vendorShipmentIdentifier,
        public readonly string $transactionType,
        public readonly \DateTime $transactionDate,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly PartyIdentification $shipToParty,
        public readonly ?string $buyerReferenceNumber = null,
        public readonly ?string $currentShipmentStatus = null,
        public readonly ?\DateTime $currentshipmentStatusDate = null,
        public readonly ?array $shipmentStatusDetails = null,
        public readonly ?\DateTime $shipmentCreateDate = null,
        public readonly ?\DateTime $shipmentConfirmDate = null,
        public readonly ?\DateTime $packageLabelCreateDate = null,
        public readonly ?string $shipmentFreightTerm = null,
        public readonly ?TransportShipmentMeasurements $shipmentMeasurements = null,
        public readonly ?CollectFreightPickupDetails $collectFreightPickupDetails = null,
        public readonly ?array $purchaseOrders = null,
        public readonly ?ImportDetails $importDetails = null,
        public readonly ?array $containers = null,
        public readonly ?TransportationDetails $transportationDetails = null,
    ) {
    }
}
