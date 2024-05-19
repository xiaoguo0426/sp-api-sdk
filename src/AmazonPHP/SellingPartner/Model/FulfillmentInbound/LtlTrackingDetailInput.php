<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;

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
class LtlTrackingDetailInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'LtlTrackingDetailInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'bill_of_lading_number' => 'string',
        'freight_bill_number' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'bill_of_lading_number' => null,
        'freight_bill_number' => null
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
        'bill_of_lading_number' => 'billOfLadingNumber',
        'freight_bill_number' => 'freightBillNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'bill_of_lading_number' => 'setBillOfLadingNumber',
        'freight_bill_number' => 'setFreightBillNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'bill_of_lading_number' => 'getBillOfLadingNumber',
        'freight_bill_number' => 'getFreightBillNumber'
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
        $this->container['bill_of_lading_number'] = $data['bill_of_lading_number'] ?? null;
        $this->container['freight_bill_number'] = $data['freight_bill_number'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if (!is_null($this->container['bill_of_lading_number']) && (mb_strlen($this->container['bill_of_lading_number']) > 1024)) {
            throw new AssertionException("invalid value for 'bill_of_lading_number', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['bill_of_lading_number']) && (mb_strlen($this->container['bill_of_lading_number']) < 1)) {
            throw new AssertionException("invalid value for 'bill_of_lading_number', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['freight_bill_number'] === null) {
            throw new AssertionException("'freight_bill_number' can't be null");
        }

        if ((count($this->container['freight_bill_number']) > 1)) {
            throw new AssertionException("invalid value for 'freight_bill_number', number of items must be less than or equal to 1.");
        }

        if ((count($this->container['freight_bill_number']) < 1)) {
            throw new AssertionException("invalid value for 'freight_bill_number', number of items must be greater than or equal to 1.");
        }

    }


    /**
     * Gets bill_of_lading_number
     *
     * @return string|null
     */
    public function getBillOfLadingNumber()
    {
        return $this->container['bill_of_lading_number'];
    }

    /**
     * Sets bill_of_lading_number
     *
     * @param string|null $bill_of_lading_number The number of the carrier shipment acknowledgement document.
     *
     * @return self
     */
    public function setBillOfLadingNumber($bill_of_lading_number) : self
    {
        $this->container['bill_of_lading_number'] = $bill_of_lading_number;

        return $this;
    }

    /**
     * Gets freight_bill_number
     *
     * @return string[]
     */
    public function getFreightBillNumber()
    {
        return $this->container['freight_bill_number'];
    }

    /**
     * Sets freight_bill_number
     *
     * @param string[] $freight_bill_number Number associated with the freight bill.
     *
     * @return self
     */
    public function setFreightBillNumber($freight_bill_number) : self
    {
        $this->container['freight_bill_number'] = $freight_bill_number;

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
