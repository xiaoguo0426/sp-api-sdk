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
class OrderAddress implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'amazon_order_id' => 'string',
        'buyer_company_name' => 'string',
        'shipping_address' => '\AmazonPHP\SellingPartner\Model\Orders\Address',
        'delivery_preferences' => '\AmazonPHP\SellingPartner\Model\Orders\DeliveryPreferences'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'amazon_order_id' => null,
        'buyer_company_name' => null,
        'shipping_address' => null,
        'delivery_preferences' => null
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
        'amazon_order_id' => 'AmazonOrderId',
        'buyer_company_name' => 'BuyerCompanyName',
        'shipping_address' => 'ShippingAddress',
        'delivery_preferences' => 'DeliveryPreferences'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'buyer_company_name' => 'setBuyerCompanyName',
        'shipping_address' => 'setShippingAddress',
        'delivery_preferences' => 'setDeliveryPreferences'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'buyer_company_name' => 'getBuyerCompanyName',
        'shipping_address' => 'getShippingAddress',
        'delivery_preferences' => 'getDeliveryPreferences'
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['buyer_company_name'] = $data['buyer_company_name'] ?? null;
        $this->container['shipping_address'] = $data['shipping_address'] ?? null;
        $this->container['delivery_preferences'] = $data['delivery_preferences'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['amazon_order_id'] === null) {
            throw new AssertionException("'amazon_order_id' can't be null");
        }

            if ($this->container['shipping_address'] !== null) {
            $this->container['shipping_address']->validate();
            }

            if ($this->container['delivery_preferences'] !== null) {
            $this->container['delivery_preferences']->validate();
            }

    }


    /**
     * Gets amazon_order_id
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string $amazon_order_id An Amazon-defined order identifier, in 3-7-7 format.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets buyer_company_name
     *
     * @return string|null
     */
    public function getBuyerCompanyName()
    {
        return $this->container['buyer_company_name'];
    }

    /**
     * Sets buyer_company_name
     *
     * @param string|null $buyer_company_name The company name of the contact buyer. For Invoice By Amazon (IBA) orders, the buyer company should be Amazon entities.
     *
     * @return self
     */
    public function setBuyerCompanyName($buyer_company_name) : self
    {
        $this->container['buyer_company_name'] = $buyer_company_name;

        return $this;
    }

    /**
     * Gets shipping_address
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\Address|null
     */
    public function getShippingAddress()
    {
        return $this->container['shipping_address'];
    }

    /**
     * Sets shipping_address
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\Address|null $shipping_address shipping_address
     *
     * @return self
     */
    public function setShippingAddress($shipping_address) : self
    {
        $this->container['shipping_address'] = $shipping_address;

        return $this;
    }

    /**
     * Gets delivery_preferences
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\DeliveryPreferences|null
     */
    public function getDeliveryPreferences()
    {
        return $this->container['delivery_preferences'];
    }

    /**
     * Sets delivery_preferences
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\DeliveryPreferences|null $delivery_preferences delivery_preferences
     *
     * @return self
     */
    public function setDeliveryPreferences($delivery_preferences) : self
    {
        $this->container['delivery_preferences'] = $delivery_preferences;

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

