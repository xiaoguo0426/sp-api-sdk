<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Services;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Services
*
* With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
*
* The version of the OpenAPI document: v1
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FixedSlotCapacity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FixedSlotCapacity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'resource_id' => 'string',
        'slot_duration' => 'float',
        'capacities' => '\AmazonPHP\SellingPartner\Model\Services\FixedSlot[]',
        'next_page_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'resource_id' => null,
        'slot_duration' => 'int32',
        'capacities' => null,
        'next_page_token' => null
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
        'resource_id' => 'resourceId',
        'slot_duration' => 'slotDuration',
        'capacities' => 'capacities',
        'next_page_token' => 'nextPageToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'resource_id' => 'setResourceId',
        'slot_duration' => 'setSlotDuration',
        'capacities' => 'setCapacities',
        'next_page_token' => 'setNextPageToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'resource_id' => 'getResourceId',
        'slot_duration' => 'getSlotDuration',
        'capacities' => 'getCapacities',
        'next_page_token' => 'getNextPageToken'
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
        $this->container['resource_id'] = $data['resource_id'] ?? null;
        $this->container['slot_duration'] = $data['slot_duration'] ?? null;
        $this->container['capacities'] = $data['capacities'] ?? null;
        $this->container['next_page_token'] = $data['next_page_token'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
    }


    /**
     * Gets resource_id
     *
     * @return string|null
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     *
     * @param string|null $resource_id Resource Identifier.
     *
     * @return self
     */
    public function setResourceId($resource_id) : self
    {
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets slot_duration
     *
     * @return float|null
     */
    public function getSlotDuration()
    {
        return $this->container['slot_duration'];
    }

    /**
     * Sets slot_duration
     *
     * @param float|null $slot_duration The duration of each slot which is returned. This value will be a multiple of 5 and fall in the following range: 5 <= `slotDuration` <= 360.
     *
     * @return self
     */
    public function setSlotDuration($slot_duration) : self
    {
        $this->container['slot_duration'] = $slot_duration;

        return $this;
    }

    /**
     * Gets capacities
     *
     * @return \AmazonPHP\SellingPartner\Model\Services\FixedSlot[]|null
     */
    public function getCapacities()
    {
        return $this->container['capacities'];
    }

    /**
     * Sets capacities
     *
     * @param \AmazonPHP\SellingPartner\Model\Services\FixedSlot[]|null $capacities Array of capacity slots in fixed slot format.
     *
     * @return self
     */
    public function setCapacities($capacities) : self
    {
        $this->container['capacities'] = $capacities;

        return $this;
    }

    /**
     * Gets next_page_token
     *
     * @return string|null
     */
    public function getNextPageToken()
    {
        return $this->container['next_page_token'];
    }

    /**
     * Sets next_page_token
     *
     * @param string|null $next_page_token Next page token, if there are more pages.
     *
     * @return self
     */
    public function setNextPageToken($next_page_token) : self
    {
        $this->container['next_page_token'] = $next_page_token;

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

