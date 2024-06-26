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
class Measurement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Measurement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'unit' => 'string',
        'value' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'unit' => null,
        'value' => null
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
        'unit' => 'Unit',
        'value' => 'Value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'unit' => 'setUnit',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'unit' => 'getUnit',
        'value' => 'getValue'
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

    const UNIT_OUNCES = 'OUNCES';
    const UNIT_POUNDS = 'POUNDS';
    const UNIT_KILOGRAMS = 'KILOGRAMS';
    const UNIT_GRAMS = 'GRAMS';
    const UNIT_MILLIGRAMS = 'MILLIGRAMS';
    const UNIT_INCHES = 'INCHES';
    const UNIT_FEET = 'FEET';
    const UNIT_METERS = 'METERS';
    const UNIT_CENTIMETERS = 'CENTIMETERS';
    const UNIT_MILLIMETERS = 'MILLIMETERS';
    const UNIT_SQUARE_METERS = 'SQUARE_METERS';
    const UNIT_SQUARE_CENTIMETERS = 'SQUARE_CENTIMETERS';
    const UNIT_SQUARE_FEET = 'SQUARE_FEET';
    const UNIT_SQUARE_INCHES = 'SQUARE_INCHES';
    const UNIT_GALLONS = 'GALLONS';
    const UNIT_PINTS = 'PINTS';
    const UNIT_QUARTS = 'QUARTS';
    const UNIT_FLUID_OUNCES = 'FLUID_OUNCES';
    const UNIT_LITERS = 'LITERS';
    const UNIT_CUBIC_METERS = 'CUBIC_METERS';
    const UNIT_CUBIC_FEET = 'CUBIC_FEET';
    const UNIT_CUBIC_INCHES = 'CUBIC_INCHES';
    const UNIT_CUBIC_CENTIMETERS = 'CUBIC_CENTIMETERS';
    const UNIT_COUNT = 'COUNT';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues() : array
    {
        return [
            self::UNIT_OUNCES,
            self::UNIT_POUNDS,
            self::UNIT_KILOGRAMS,
            self::UNIT_GRAMS,
            self::UNIT_MILLIGRAMS,
            self::UNIT_INCHES,
            self::UNIT_FEET,
            self::UNIT_METERS,
            self::UNIT_CENTIMETERS,
            self::UNIT_MILLIMETERS,
            self::UNIT_SQUARE_METERS,
            self::UNIT_SQUARE_CENTIMETERS,
            self::UNIT_SQUARE_FEET,
            self::UNIT_SQUARE_INCHES,
            self::UNIT_GALLONS,
            self::UNIT_PINTS,
            self::UNIT_QUARTS,
            self::UNIT_FLUID_OUNCES,
            self::UNIT_LITERS,
            self::UNIT_CUBIC_METERS,
            self::UNIT_CUBIC_FEET,
            self::UNIT_CUBIC_INCHES,
            self::UNIT_CUBIC_CENTIMETERS,
            self::UNIT_COUNT,
        ];
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
        $this->container['unit'] = $data['unit'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['unit'] === null) {
            throw new AssertionException("'unit' can't be null");
        }

        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'unit', must be one of '%s'",
                    $this->container['unit'],
                    implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['value'] === null) {
            throw new AssertionException("'value' can't be null");
        }

    }


    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit The unit of measure for this measurement.
     *
     * @return self
     */
    public function setUnit($unit) : self
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value The value of the measurement.
     *
     * @return self
     */
    public function setValue($value) : self
    {
        $this->container['value'] = $value;

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

