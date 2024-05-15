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
class OrderRegulatedInfo implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'OrderRegulatedInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'amazon_order_id' => 'string',
        'regulated_information' => '\AmazonPHP\SellingPartner\Model\Orders\RegulatedInformation',
        'requires_dosage_label' => 'bool',
        'regulated_order_verification_status' => '\AmazonPHP\SellingPartner\Model\Orders\RegulatedOrderVerificationStatus'
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
        'regulated_information' => null,
        'requires_dosage_label' => null,
        'regulated_order_verification_status' => null
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
        'regulated_information' => 'RegulatedInformation',
        'requires_dosage_label' => 'RequiresDosageLabel',
        'regulated_order_verification_status' => 'RegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'regulated_information' => 'setRegulatedInformation',
        'requires_dosage_label' => 'setRequiresDosageLabel',
        'regulated_order_verification_status' => 'setRegulatedOrderVerificationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'regulated_information' => 'getRegulatedInformation',
        'requires_dosage_label' => 'getRequiresDosageLabel',
        'regulated_order_verification_status' => 'getRegulatedOrderVerificationStatus'
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
        $this->container['regulated_information'] = $data['regulated_information'] ?? null;
        $this->container['requires_dosage_label'] = $data['requires_dosage_label'] ?? null;
        $this->container['regulated_order_verification_status'] = $data['regulated_order_verification_status'] ?? null;
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

        if ($this->container['regulated_information'] === null) {
            throw new AssertionException("'regulated_information' can't be null");
        }

            $this->container['regulated_information']->validate();

        if ($this->container['requires_dosage_label'] === null) {
            throw new AssertionException("'requires_dosage_label' can't be null");
        }

        if ($this->container['regulated_order_verification_status'] === null) {
            throw new AssertionException("'regulated_order_verification_status' can't be null");
        }

            $this->container['regulated_order_verification_status']->validate();

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
     * Gets regulated_information
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\RegulatedInformation
     */
    public function getRegulatedInformation()
    {
        return $this->container['regulated_information'];
    }

    /**
     * Sets regulated_information
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\RegulatedInformation $regulated_information regulated_information
     *
     * @return self
     */
    public function setRegulatedInformation($regulated_information) : self
    {
        $this->container['regulated_information'] = $regulated_information;

        return $this;
    }

    /**
     * Gets requires_dosage_label
     *
     * @return bool
     */
    public function getRequiresDosageLabel()
    {
        return $this->container['requires_dosage_label'];
    }

    /**
     * Sets requires_dosage_label
     *
     * @param bool $requires_dosage_label When true, the order requires attaching a dosage information label when shipped.
     *
     * @return self
     */
    public function setRequiresDosageLabel($requires_dosage_label) : self
    {
        $this->container['requires_dosage_label'] = $requires_dosage_label;

        return $this;
    }

    /**
     * Gets regulated_order_verification_status
     *
     * @return \AmazonPHP\SellingPartner\Model\Orders\RegulatedOrderVerificationStatus
     */
    public function getRegulatedOrderVerificationStatus()
    {
        return $this->container['regulated_order_verification_status'];
    }

    /**
     * Sets regulated_order_verification_status
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\RegulatedOrderVerificationStatus $regulated_order_verification_status regulated_order_verification_status
     *
     * @return self
     */
    public function setRegulatedOrderVerificationStatus($regulated_order_verification_status) : self
    {
        $this->container['regulated_order_verification_status'] = $regulated_order_verification_status;

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

