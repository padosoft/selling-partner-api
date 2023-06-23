<?php
/**
 * PaginationResponse
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
 * PaginationResponse Class Doc Comment
 *
 * @category Class
 * @description Use these parameters to paginate through the response.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PaginationResponse extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaginationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'total_results' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'total_results' => 'int64'
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'total_results' => 'totalResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'total_results' => 'setTotalResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'total_results' => 'getTotalResults'
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
        $this->container['total_results'] = $data['total_results'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['total_results']) && ($this->container['total_results'] < 0)) {
            $invalidProperties[] = "invalid value for 'total_results', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }


    /**
     * Gets total_results
     *
     * @return int|null
     */
    public function getTotalResults()
    {
        return $this->container['total_results'];
    }

    /**
     * Sets total_results
     *
     * @param int|null $total_results Total number of results matching the given filter criteria.
     *
     * @return self
     */
    public function setTotalResults($total_results)
    {

        if (!is_null($total_results) && ($total_results < 0)) {
            throw new \InvalidArgumentException('invalid value for $total_results when calling PaginationResponse., must be bigger than or equal to 0.');
        }

        $this->container['total_results'] = $total_results;

        return $this;
    }
}


