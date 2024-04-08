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
class PrepInstruction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'PrepInstruction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'fee' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Currency',
        'prep_owner' => 'string',
        'prep_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'fee' => null,
        'prep_owner' => null,
        'prep_type' => null
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
        'fee' => 'fee',
        'prep_owner' => 'prepOwner',
        'prep_type' => 'prepType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'fee' => 'setFee',
        'prep_owner' => 'setPrepOwner',
        'prep_type' => 'setPrepType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'fee' => 'getFee',
        'prep_owner' => 'getPrepOwner',
        'prep_type' => 'getPrepType'
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
        $this->container['fee'] = $data['fee'] ?? null;
        $this->container['prep_owner'] = $data['prep_owner'] ?? null;
        $this->container['prep_type'] = $data['prep_type'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['fee'] !== null) {
            $this->container['fee']->validate();
            }

        if (!is_null($this->container['prep_owner']) && (mb_strlen($this->container['prep_owner']) > 1024)) {
            throw new AssertionException("invalid value for 'prep_owner', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['prep_owner']) && (mb_strlen($this->container['prep_owner']) < 1)) {
            throw new AssertionException("invalid value for 'prep_owner', the character length must be bigger than or equal to 1.");
        }

        if (!is_null($this->container['prep_type']) && (mb_strlen($this->container['prep_type']) > 1024)) {
            throw new AssertionException("invalid value for 'prep_type', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['prep_type']) && (mb_strlen($this->container['prep_type']) < 1)) {
            throw new AssertionException("invalid value for 'prep_type', the character length must be bigger than or equal to 1.");
        }

    }


    /**
     * Gets fee
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Currency|null
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Currency|null $fee fee
     *
     * @return self
     */
    public function setFee($fee) : self
    {
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets prep_owner
     *
     * @return string|null
     */
    public function getPrepOwner()
    {
        return $this->container['prep_owner'];
    }

    /**
     * Sets prep_owner
     *
     * @param string|null $prep_owner In some situations, special preparations are required for items and this field reflects the owner of the         preparations. Options include `AMAZON` or `SELLER`.
     *
     * @return self
     */
    public function setPrepOwner($prep_owner) : self
    {
        $this->container['prep_owner'] = $prep_owner;

        return $this;
    }

    /**
     * Gets prep_type
     *
     * @return string|null
     */
    public function getPrepType()
    {
        return $this->container['prep_type'];
    }

    /**
     * Sets prep_type
     *
     * @param string|null $prep_type Type of preparation that should be done. Can be `ITEM_LABELING`, `ITEM_BUBBLEWRAP`, `ITEM_POLYBAGGING`, `ITEM_TAPING`, `ITEM_BLACK_SHRINKWRAP`, `ITEM_HANG_GARMENT`, `ITEM_BOXING`, `ITEM_SETCREAT`, `ITEM_RMOVHANG`, `ITEM_SUFFOSTK`, `ITEM_CAP_SEALING`, `ITEM_DEBUNDLE`, `ITEM_SETSTK`, `ITEM_SIOC`, `ITEM_NO_PREP`, `ADULT`, `BABY`, `TEXTILE`, `HANGER`, `FRAGILE`, `LIQUID`, `SHARP`, `SMALL`, `PERFORATED`, `GRANULAR`, `SET`, `FC_PROVIDED`, `UNKNOWN`, or `NONE`.
     *
     * @return self
     */
    public function setPrepType($prep_type) : self
    {
        $this->container['prep_type'] = $prep_type;

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

