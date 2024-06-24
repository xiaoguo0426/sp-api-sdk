<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner APIs for Fulfillment Outbound
*
* The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
*
* The version of the OpenAPI document: 2020-07-01
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class FulfillmentPreviewShipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'FulfillmentPreviewShipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'earliest_ship_date' => '\DateTimeInterface',
        'latest_ship_date' => '\DateTimeInterface',
        'earliest_arrival_date' => '\DateTimeInterface',
        'latest_arrival_date' => '\DateTimeInterface',
        'shipping_notes' => 'string[]',
        'fulfillment_preview_items' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'earliest_ship_date' => 'date-time',
        'latest_ship_date' => 'date-time',
        'earliest_arrival_date' => 'date-time',
        'latest_arrival_date' => 'date-time',
        'shipping_notes' => null,
        'fulfillment_preview_items' => null
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
        'earliest_ship_date' => 'earliestShipDate',
        'latest_ship_date' => 'latestShipDate',
        'earliest_arrival_date' => 'earliestArrivalDate',
        'latest_arrival_date' => 'latestArrivalDate',
        'shipping_notes' => 'shippingNotes',
        'fulfillment_preview_items' => 'fulfillmentPreviewItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'earliest_ship_date' => 'setEarliestShipDate',
        'latest_ship_date' => 'setLatestShipDate',
        'earliest_arrival_date' => 'setEarliestArrivalDate',
        'latest_arrival_date' => 'setLatestArrivalDate',
        'shipping_notes' => 'setShippingNotes',
        'fulfillment_preview_items' => 'setFulfillmentPreviewItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'earliest_ship_date' => 'getEarliestShipDate',
        'latest_ship_date' => 'getLatestShipDate',
        'earliest_arrival_date' => 'getEarliestArrivalDate',
        'latest_arrival_date' => 'getLatestArrivalDate',
        'shipping_notes' => 'getShippingNotes',
        'fulfillment_preview_items' => 'getFulfillmentPreviewItems'
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
        $this->container['earliest_ship_date'] = $data['earliest_ship_date'] ?? null;
        $this->container['latest_ship_date'] = $data['latest_ship_date'] ?? null;
        $this->container['earliest_arrival_date'] = $data['earliest_arrival_date'] ?? null;
        $this->container['latest_arrival_date'] = $data['latest_arrival_date'] ?? null;
        $this->container['shipping_notes'] = $data['shipping_notes'] ?? null;
        $this->container['fulfillment_preview_items'] = $data['fulfillment_preview_items'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['fulfillment_preview_items'] === null) {
            throw new AssertionException("'fulfillment_preview_items' can't be null");
        }

    }


    /**
     * Gets earliest_ship_date
     *
     * @return \DateTimeInterface|null
     */
    public function getEarliestShipDate()
    {
        return $this->container['earliest_ship_date'];
    }

    /**
     * Sets earliest_ship_date
     *
     * @param \DateTimeInterface|null $earliest_ship_date Date timestamp
     *
     * @return self
     */
    public function setEarliestShipDate($earliest_ship_date) : self
    {
        $this->container['earliest_ship_date'] = $earliest_ship_date;

        return $this;
    }

    /**
     * Gets latest_ship_date
     *
     * @return \DateTimeInterface|null
     */
    public function getLatestShipDate()
    {
        return $this->container['latest_ship_date'];
    }

    /**
     * Sets latest_ship_date
     *
     * @param \DateTimeInterface|null $latest_ship_date Date timestamp
     *
     * @return self
     */
    public function setLatestShipDate($latest_ship_date) : self
    {
        $this->container['latest_ship_date'] = $latest_ship_date;

        return $this;
    }

    /**
     * Gets earliest_arrival_date
     *
     * @return \DateTimeInterface|null
     */
    public function getEarliestArrivalDate()
    {
        return $this->container['earliest_arrival_date'];
    }

    /**
     * Sets earliest_arrival_date
     *
     * @param \DateTimeInterface|null $earliest_arrival_date Date timestamp
     *
     * @return self
     */
    public function setEarliestArrivalDate($earliest_arrival_date) : self
    {
        $this->container['earliest_arrival_date'] = $earliest_arrival_date;

        return $this;
    }

    /**
     * Gets latest_arrival_date
     *
     * @return \DateTimeInterface|null
     */
    public function getLatestArrivalDate()
    {
        return $this->container['latest_arrival_date'];
    }

    /**
     * Sets latest_arrival_date
     *
     * @param \DateTimeInterface|null $latest_arrival_date Date timestamp
     *
     * @return self
     */
    public function setLatestArrivalDate($latest_arrival_date) : self
    {
        $this->container['latest_arrival_date'] = $latest_arrival_date;

        return $this;
    }

    /**
     * Gets shipping_notes
     *
     * @return string[]|null
     */
    public function getShippingNotes()
    {
        return $this->container['shipping_notes'];
    }

    /**
     * Sets shipping_notes
     *
     * @param string[]|null $shipping_notes Provides additional insight into the shipment timeline when exact delivery dates are not able to be precomputed.
     *
     * @return self
     */
    public function setShippingNotes($shipping_notes) : self
    {
        $this->container['shipping_notes'] = $shipping_notes;

        return $this;
    }

    /**
     * Gets fulfillment_preview_items
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewItem[]
     */
    public function getFulfillmentPreviewItems()
    {
        return $this->container['fulfillment_preview_items'];
    }

    /**
     * Sets fulfillment_preview_items
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentPreviewItem[] $fulfillment_preview_items An array of fulfillment preview item information.
     *
     * @return self
     */
    public function setFulfillmentPreviewItems($fulfillment_preview_items) : self
    {
        $this->container['fulfillment_preview_items'] = $fulfillment_preview_items;

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

