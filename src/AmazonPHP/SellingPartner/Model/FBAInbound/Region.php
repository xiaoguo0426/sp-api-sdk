<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\FBAInbound;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* The Selling Partner API for FBA inbound operations.
*
* The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
*
* The version of the OpenAPI document: 2024-03-20
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Region implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Region';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'country_code' => 'string',
        'state' => 'string',
        'warehouse_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'country_code' => null,
        'state' => null,
        'warehouse_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'country_code' => 'countryCode',
        'state' => 'state',
        'warehouse_id' => 'warehouseId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'country_code' => 'setCountryCode',
        'state' => 'setState',
        'warehouse_id' => 'setWarehouseId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'country_code' => 'getCountryCode',
        'state' => 'getState',
        'warehouse_id' => 'getWarehouseId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['warehouse_id'] = $data['warehouse_id'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) > 1024)) {
            throw new AssertionException("invalid value for 'country_code', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['country_code']) && (mb_strlen($this->container['country_code']) < 1)) {
            throw new AssertionException("invalid value for 'country_code', the character length must be bigger than or equal to 1.");
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 1024)) {
            throw new AssertionException("invalid value for 'state', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) < 1)) {
            throw new AssertionException("invalid value for 'state', the character length must be bigger than or equal to 1.");
        }

        if (!is_null($this->container['warehouse_id']) && (mb_strlen($this->container['warehouse_id']) > 1024)) {
            throw new AssertionException("invalid value for 'warehouse_id', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['warehouse_id']) && (mb_strlen($this->container['warehouse_id']) < 1)) {
            throw new AssertionException("invalid value for 'warehouse_id', the character length must be bigger than or equal to 1.");
        }

    }


    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code ISO 3166 standard alpha-2 country code.
     *
     * @return self
     */
    public function setCountryCode($country_code) : self
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State.
     *
     * @return self
     */
    public function setState($state) : self
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets warehouse_id
     *
     * @return string|null
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param string|null $warehouse_id An identifier for a warehouse, such as a FC, IXD, upstream storage.
     *
     * @return self
     */
    public function setWarehouseId($warehouse_id) : self
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @return boolean
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @return void
     */
    public function offsetSet($offset, $value) : void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @return void
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
       return \json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString() : string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue() : string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
