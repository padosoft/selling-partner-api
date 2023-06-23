<?php
/**
 * ListOffersResponseOffer
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Replenishment
 *
 * The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery (automatic or manual) of any replenishable item at a frequency chosen by the customer.
 *
 * The version of the OpenAPI document: 2022-11-07
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\ReplenishmentV20221107;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * ListOffersResponseOffer Class Doc Comment
 *
 * @category Class
 * @description An object which contains details about an offer.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ListOffersResponseOffer extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ListOffersResponseOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sku' => 'string',
        'asin' => 'string',
        'marketplace_id' => 'string',
        'eligibility' => '\SellingPartnerApi\Model\ReplenishmentV20221107\EligibilityStatus',
        'offer_program_configuration' => '\SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfiguration',
        'program_type' => '\SellingPartnerApi\Model\ReplenishmentV20221107\ProgramType',
        'vendor_codes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sku' => null,
        'asin' => null,
        'marketplace_id' => null,
        'eligibility' => null,
        'offer_program_configuration' => null,
        'program_type' => null,
        'vendor_codes' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sku' => 'sku',
        'asin' => 'asin',
        'marketplace_id' => 'marketplaceId',
        'eligibility' => 'eligibility',
        'offer_program_configuration' => 'offerProgramConfiguration',
        'program_type' => 'programType',
        'vendor_codes' => 'vendorCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'asin' => 'setAsin',
        'marketplace_id' => 'setMarketplaceId',
        'eligibility' => 'setEligibility',
        'offer_program_configuration' => 'setOfferProgramConfiguration',
        'program_type' => 'setProgramType',
        'vendor_codes' => 'setVendorCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'asin' => 'getAsin',
        'marketplace_id' => 'getMarketplaceId',
        'eligibility' => 'getEligibility',
        'offer_program_configuration' => 'getOfferProgramConfiguration',
        'program_type' => 'getProgramType',
        'vendor_codes' => 'getVendorCodes'
    ];


    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['eligibility'] = $data['eligibility'] ?? null;
        $this->container['offer_program_configuration'] = $data['offer_program_configuration'] ?? null;
        $this->container['program_type'] = $data['program_type'] ?? null;
        $this->container['vendor_codes'] = $data['vendor_codes'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }


    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The SKU. This property is only supported for sellers and not for vendors.
     *
     * @return self
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }
    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN).
     *
     * @return self
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }
    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }
    /**
     * Gets eligibility
     *
     * @return \SellingPartnerApi\Model\ReplenishmentV20221107\EligibilityStatus|null
     */
    public function getEligibility()
    {
        return $this->container['eligibility'];
    }

    /**
     * Sets eligibility
     *
     * @param \SellingPartnerApi\Model\ReplenishmentV20221107\EligibilityStatus|null $eligibility eligibility
     *
     * @return self
     */
    public function setEligibility($eligibility)
    {
        $this->container['eligibility'] = $eligibility;

        return $this;
    }
    /**
     * Gets offer_program_configuration
     *
     * @return \SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfiguration|null
     */
    public function getOfferProgramConfiguration()
    {
        return $this->container['offer_program_configuration'];
    }

    /**
     * Sets offer_program_configuration
     *
     * @param \SellingPartnerApi\Model\ReplenishmentV20221107\OfferProgramConfiguration|null $offer_program_configuration offer_program_configuration
     *
     * @return self
     */
    public function setOfferProgramConfiguration($offer_program_configuration)
    {
        $this->container['offer_program_configuration'] = $offer_program_configuration;

        return $this;
    }
    /**
     * Gets program_type
     *
     * @return \SellingPartnerApi\Model\ReplenishmentV20221107\ProgramType|null
     */
    public function getProgramType()
    {
        return $this->container['program_type'];
    }

    /**
     * Sets program_type
     *
     * @param \SellingPartnerApi\Model\ReplenishmentV20221107\ProgramType|null $program_type program_type
     *
     * @return self
     */
    public function setProgramType($program_type)
    {
        $this->container['program_type'] = $program_type;

        return $this;
    }
    /**
     * Gets vendor_codes
     *
     * @return string[]|null
     */
    public function getVendorCodes()
    {
        return $this->container['vendor_codes'];
    }

    /**
     * Sets vendor_codes
     *
     * @param string[]|null $vendor_codes A list of vendor codes associated with the offer.
     *
     * @return self
     */
    public function setVendorCodes($vendor_codes)
    {
        $this->container['vendor_codes'] = $vendor_codes;

        return $this;
    }
}


