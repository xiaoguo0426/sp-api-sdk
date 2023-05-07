<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\ListingsItems;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Listings Items.
 *
 * The Selling Partner API for Listings Items (Listings Items API) provides programmatic access to selling partner listings on Amazon. Use this API in collaboration with the Selling Partner API for Product Type Definitions, which you use to retrieve the information about Amazon product types needed to use the Listings Items API.  For more information, see the [Listings Items API Use Case Guide](doc:listings-items-api-v2021-08-01-use-case-guide).
 *
 * The version of the OpenAPI document: 2021-08-01
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Item implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Item';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'summaries' => '\AmazonPHP\SellingPartner\Model\ListingsItems\ItemSummaryByMarketplace[]',
        'attributes' => 'object',
        'issues' => '\AmazonPHP\SellingPartner\Model\ListingsItems\Issue[]',
        'offers' => '\AmazonPHP\SellingPartner\Model\ListingsItems\ItemOfferByMarketplace[]',
        'fulfillment_availability' => '\AmazonPHP\SellingPartner\Model\ListingsItems\FulfillmentAvailability[]',
        'procurement' => '\AmazonPHP\SellingPartner\Model\ListingsItems\ItemProcurement',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'sku' => null,
        'summaries' => null,
        'attributes' => null,
        'issues' => null,
        'offers' => null,
        'fulfillment_availability' => null,
        'procurement' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sku' => 'sku',
        'summaries' => 'summaries',
        'attributes' => 'attributes',
        'issues' => 'issues',
        'offers' => 'offers',
        'fulfillment_availability' => 'fulfillmentAvailability',
        'procurement' => 'procurement',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'summaries' => 'setSummaries',
        'attributes' => 'setAttributes',
        'issues' => 'setIssues',
        'offers' => 'setOffers',
        'fulfillment_availability' => 'setFulfillmentAvailability',
        'procurement' => 'setProcurement',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'summaries' => 'getSummaries',
        'attributes' => 'getAttributes',
        'issues' => 'getIssues',
        'offers' => 'getOffers',
        'fulfillment_availability' => 'getFulfillmentAvailability',
        'procurement' => 'getProcurement',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['summaries'] = $data['summaries'] ?? null;
        $this->container['attributes'] = $data['attributes'] ?? null;
        $this->container['issues'] = $data['issues'] ?? null;
        $this->container['offers'] = $data['offers'] ?? null;
        $this->container['fulfillment_availability'] = $data['fulfillment_availability'] ?? null;
        $this->container['procurement'] = $data['procurement'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['sku'] === null) {
            throw new AssertionException("'sku' can't be null");
        }

        if ($this->container['procurement'] !== null) {
            $this->container['procurement']->validate();
        }
    }

    /**
     * Gets sku.
     *
     * @return string
     */
    public function getSku() : string
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku.
     *
     * @param string $sku a selling partner provided identifier for an Amazon listing
     */
    public function setSku(string $sku) : self
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets summaries.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ListingsItems\ItemSummaryByMarketplace[]
     */
    public function getSummaries() : ?array
    {
        return $this->container['summaries'];
    }

    /**
     * Sets summaries.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ListingsItems\ItemSummaryByMarketplace[] $summaries summary details of a listings item
     */
    public function setSummaries(?array $summaries) : self
    {
        $this->container['summaries'] = $summaries;

        return $this;
    }

    /**
     * Gets attributes.
     *
     * @return null|object
     */
    public function getAttributes() : ?array
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes.
     *
     * @param null|object $attributes JSON object containing structured listings item attribute data keyed by attribute name
     */
    public function setAttributes(?array $attributes) : self
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets issues.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ListingsItems\Issue[]
     */
    public function getIssues() : ?array
    {
        return $this->container['issues'];
    }

    /**
     * Sets issues.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ListingsItems\Issue[] $issues issues associated with the listings item
     */
    public function setIssues(?array $issues) : self
    {
        $this->container['issues'] = $issues;

        return $this;
    }

    /**
     * Gets offers.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ListingsItems\ItemOfferByMarketplace[]
     */
    public function getOffers() : ?array
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ListingsItems\ItemOfferByMarketplace[] $offers offer details for the listings item
     */
    public function setOffers(?array $offers) : self
    {
        $this->container['offers'] = $offers;

        return $this;
    }

    /**
     * Gets fulfillment_availability.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ListingsItems\FulfillmentAvailability[]
     */
    public function getFulfillmentAvailability() : ?array
    {
        return $this->container['fulfillment_availability'];
    }

    /**
     * Sets fulfillment_availability.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ListingsItems\FulfillmentAvailability[] $fulfillment_availability fulfillment availability for the listings item
     */
    public function setFulfillmentAvailability(?array $fulfillment_availability) : self
    {
        $this->container['fulfillment_availability'] = $fulfillment_availability;

        return $this;
    }

    /**
     * Gets procurement.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\ListingsItems\ItemProcurement
     */
    public function getProcurement() : ?ItemProcurement
    {
        return $this->container['procurement'];
    }

    /**
     * Sets procurement.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ListingsItems\ItemProcurement $procurement procurement
     */
    public function setProcurement(?ItemProcurement $procurement) : self
    {
        $this->container['procurement'] = $procurement;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
