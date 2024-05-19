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
class TaxDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'TaxDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'declared_value' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Currency',
        'hsn_code' => 'string',
        'tax_rates' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\TaxRate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'declared_value' => null,
        'hsn_code' => null,
        'tax_rates' => null
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
        'declared_value' => 'declaredValue',
        'hsn_code' => 'hsnCode',
        'tax_rates' => 'taxRates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'declared_value' => 'setDeclaredValue',
        'hsn_code' => 'setHsnCode',
        'tax_rates' => 'setTaxRates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'declared_value' => 'getDeclaredValue',
        'hsn_code' => 'getHsnCode',
        'tax_rates' => 'getTaxRates'
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
        $this->container['declared_value'] = $data['declared_value'] ?? null;
        $this->container['hsn_code'] = $data['hsn_code'] ?? null;
        $this->container['tax_rates'] = $data['tax_rates'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['declared_value'] !== null) {
            $this->container['declared_value']->validate();
            }

        if (!is_null($this->container['hsn_code']) && (mb_strlen($this->container['hsn_code']) > 1024)) {
            throw new AssertionException("invalid value for 'hsn_code', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['hsn_code']) && (mb_strlen($this->container['hsn_code']) < 1)) {
            throw new AssertionException("invalid value for 'hsn_code', the character length must be bigger than or equal to 1.");
        }

    }


    /**
     * Gets declared_value
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Currency|null
     */
    public function getDeclaredValue()
    {
        return $this->container['declared_value'];
    }

    /**
     * Sets declared_value
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Currency|null $declared_value declared_value
     *
     * @return self
     */
    public function setDeclaredValue($declared_value) : self
    {
        $this->container['declared_value'] = $declared_value;

        return $this;
    }

    /**
     * Gets hsn_code
     *
     * @return string|null
     */
    public function getHsnCode()
    {
        return $this->container['hsn_code'];
    }

    /**
     * Sets hsn_code
     *
     * @param string|null $hsn_code Harmonized System of Nomenclature code.
     *
     * @return self
     */
    public function setHsnCode($hsn_code) : self
    {
        $this->container['hsn_code'] = $hsn_code;

        return $this;
    }

    /**
     * Gets tax_rates
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\TaxRate[]|null
     */
    public function getTaxRates()
    {
        return $this->container['tax_rates'];
    }

    /**
     * Sets tax_rates
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\TaxRate[]|null $tax_rates List of tax rates.
     *
     * @return self
     */
    public function setTaxRates($tax_rates) : self
    {
        $this->container['tax_rates'] = $tax_rates;

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
