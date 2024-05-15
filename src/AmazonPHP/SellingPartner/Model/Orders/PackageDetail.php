<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Orders;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Orders
*
* The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools. The Orders API supports orders that are two years old or less. Orders more than two years old will not show in the API response.  **Note:** The Orders API supports orders from 2016 and after for the JP, AU, and SG marketplaces.
*
* The version of the OpenAPI document: v0
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PackageDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PackageDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'package_reference_id' => 'string',
        'carrier_code' => 'string',
        'carrier_name' => 'string',
        'shipping_method' => 'string',
        'tracking_number' => 'string',
        'ship_date' => '\DateTimeInterface',
        'ship_from_supply_source_id' => 'string',
        'order_items' => '\AmazonPHP\SellingPartner\Model\Orders\ConfirmShipmentOrderItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'package_reference_id' => null,
        'carrier_code' => null,
        'carrier_name' => null,
        'shipping_method' => null,
        'tracking_number' => null,
        'ship_date' => 'date-time',
        'ship_from_supply_source_id' => null,
        'order_items' => null
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
        'package_reference_id' => 'packageReferenceId',
        'carrier_code' => 'carrierCode',
        'carrier_name' => 'carrierName',
        'shipping_method' => 'shippingMethod',
        'tracking_number' => 'trackingNumber',
        'ship_date' => 'shipDate',
        'ship_from_supply_source_id' => 'shipFromSupplySourceId',
        'order_items' => 'orderItems'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'package_reference_id' => 'setPackageReferenceId',
        'carrier_code' => 'setCarrierCode',
        'carrier_name' => 'setCarrierName',
        'shipping_method' => 'setShippingMethod',
        'tracking_number' => 'setTrackingNumber',
        'ship_date' => 'setShipDate',
        'ship_from_supply_source_id' => 'setShipFromSupplySourceId',
        'order_items' => 'setOrderItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'package_reference_id' => 'getPackageReferenceId',
        'carrier_code' => 'getCarrierCode',
        'carrier_name' => 'getCarrierName',
        'shipping_method' => 'getShippingMethod',
        'tracking_number' => 'getTrackingNumber',
        'ship_date' => 'getShipDate',
        'ship_from_supply_source_id' => 'getShipFromSupplySourceId',
        'order_items' => 'getOrderItems'
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
        $this->container['package_reference_id'] = $data['package_reference_id'] ?? null;
        $this->container['carrier_code'] = $data['carrier_code'] ?? null;
        $this->container['carrier_name'] = $data['carrier_name'] ?? null;
        $this->container['shipping_method'] = $data['shipping_method'] ?? null;
        $this->container['tracking_number'] = $data['tracking_number'] ?? null;
        $this->container['ship_date'] = $data['ship_date'] ?? null;
        $this->container['ship_from_supply_source_id'] = $data['ship_from_supply_source_id'] ?? null;
        $this->container['order_items'] = $data['order_items'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['package_reference_id'] === null) {
            throw new AssertionException("'package_reference_id' can't be null");
        }

        if ($this->container['carrier_code'] === null) {
            throw new AssertionException("'carrier_code' can't be null");
        }

        if ($this->container['tracking_number'] === null) {
            throw new AssertionException("'tracking_number' can't be null");
        }

        if ($this->container['ship_date'] === null) {
            throw new AssertionException("'ship_date' can't be null");
        }

        if ($this->container['order_items'] === null) {
            throw new AssertionException("'order_items' can't be null");
        }

    }


    /**
     * Gets package_reference_id
     *
     * @return string
     */
    public function getPackageReferenceId()
    {
        return $this->container['package_reference_id'];
    }

    /**
     * Sets package_reference_id
     *
     * @param string $package_reference_id A seller-supplied identifier that uniquely identifies a package within the scope of an order. Only positive numeric values are supported.
     *
     * @return self
     */
    public function setPackageReferenceId($package_reference_id) : self
    {
        $this->container['package_reference_id'] = $package_reference_id;

        return $this;
    }

    /**
     * Gets carrier_code
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string $carrier_code Identifies the carrier that will deliver the package. This field is required for all marketplaces. For the acceptable `CarrierCode` value, refer to the list of <a href='https://images-na.ssl-images-amazon.com/images/G/01/rainier/help/xsd/release_1_9/amzn-base._TTH_.xsd'>CarrierCode</a>.
     *
     * @return self
     */
    public function setCarrierCode($carrier_code) : self
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets carrier_name
     *
     * @return string|null
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name
     *
     * @param string|null $carrier_name Carrier Name that will deliver the package. Required when carrierCode is \"Others\"
     *
     * @return self
     */
    public function setCarrierName($carrier_name) : self
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets shipping_method
     *
     * @return string|null
     */
    public function getShippingMethod()
    {
        return $this->container['shipping_method'];
    }

    /**
     * Sets shipping_method
     *
     * @param string|null $shipping_method Ship method to be used for shipping the order.
     *
     * @return self
     */
    public function setShippingMethod($shipping_method) : self
    {
        $this->container['shipping_method'] = $shipping_method;

        return $this;
    }

    /**
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number The tracking number used to obtain tracking and delivery information.
     *
     * @return self
     */
    public function setTrackingNumber($tracking_number) : self
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets ship_date
     *
     * @return \DateTimeInterface
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date
     *
     * @param \DateTimeInterface $ship_date The shipping date for the package. Must be in <a href='https://developer-docs.amazon.com/sp-api/docs/iso-8601'>ISO 8601</a> date/time format.
     *
     * @return self
     */
    public function setShipDate($ship_date) : self
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets ship_from_supply_source_id
     *
     * @return string|null
     */
    public function getShipFromSupplySourceId()
    {
        return $this->container['ship_from_supply_source_id'];
    }

    /**
     * Sets ship_from_supply_source_id
     *
     * @param string|null $ship_from_supply_source_id The unique identifier of the supply source.
     *
     * @return self
     */
    public function setShipFromSupplySourceId($ship_from_supply_source_id) : self
    {
        $this->container['ship_from_supply_source_id'] = $ship_from_supply_source_id;

        return $this;
    }

    /**
     * Gets order_items
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\ConfirmShipmentOrderItem[]
     */
    public function getOrderItems()
    {
        return $this->container['order_items'];
    }

    /**
     * Sets order_items
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\ConfirmShipmentOrderItem[] $order_items A list of order items.
     *
     * @return self
     */
    public function setOrderItems($order_items) : self
    {
        $this->container['order_items'] = $order_items;

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

