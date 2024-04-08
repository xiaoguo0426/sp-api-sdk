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
class Address implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'address_line1' => 'string',
        'address_line2' => 'string',
        'city' => 'string',
        'company_name' => 'string',
        'country_code' => 'string',
        'name' => 'string',
        'postal_code' => 'string',
        'state_or_province_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'address_line1' => null,
        'address_line2' => null,
        'city' => null,
        'company_name' => null,
        'country_code' => null,
        'name' => null,
        'postal_code' => null,
        'state_or_province_code' => null
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
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'city' => 'city',
        'company_name' => 'companyName',
        'country_code' => 'countryCode',
        'name' => 'name',
        'postal_code' => 'postalCode',
        'state_or_province_code' => 'stateOrProvinceCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'city' => 'setCity',
        'company_name' => 'setCompanyName',
        'country_code' => 'setCountryCode',
        'name' => 'setName',
        'postal_code' => 'setPostalCode',
        'state_or_province_code' => 'setStateOrProvinceCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'city' => 'getCity',
        'company_name' => 'getCompanyName',
        'country_code' => 'getCountryCode',
        'name' => 'getName',
        'postal_code' => 'getPostalCode',
        'state_or_province_code' => 'getStateOrProvinceCode'
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
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['state_or_province_code'] = $data['state_or_province_code'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['address_line1'] === null) {
            throw new AssertionException("'address_line1' can't be null");
        }

        if ((mb_strlen($this->container['address_line1']) > 180)) {
            throw new AssertionException("invalid value for 'address_line1', the character length must be smaller than or equal to 180.");
        }

        if ((mb_strlen($this->container['address_line1']) < 1)) {
            throw new AssertionException("invalid value for 'address_line1', the character length must be bigger than or equal to 1.");
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) > 60)) {
            throw new AssertionException("invalid value for 'address_line2', the character length must be smaller than or equal to 60.");
        }

        if (!is_null($this->container['address_line2']) && (mb_strlen($this->container['address_line2']) < 1)) {
            throw new AssertionException("invalid value for 'address_line2', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['city'] === null) {
            throw new AssertionException("'city' can't be null");
        }

        if ((mb_strlen($this->container['city']) > 30)) {
            throw new AssertionException("invalid value for 'city', the character length must be smaller than or equal to 30.");
        }

        if ((mb_strlen($this->container['city']) < 1)) {
            throw new AssertionException("invalid value for 'city', the character length must be bigger than or equal to 1.");
        }

        if (!is_null($this->container['company_name']) && (mb_strlen($this->container['company_name']) > 50)) {
            throw new AssertionException("invalid value for 'company_name', the character length must be smaller than or equal to 50.");
        }

        if (!is_null($this->container['company_name']) && (mb_strlen($this->container['company_name']) < 1)) {
            throw new AssertionException("invalid value for 'company_name', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['country_code'] === null) {
            throw new AssertionException("'country_code' can't be null");
        }

        if ((mb_strlen($this->container['country_code']) > 2)) {
            throw new AssertionException("invalid value for 'country_code', the character length must be smaller than or equal to 2.");
        }

        if ((mb_strlen($this->container['country_code']) < 2)) {
            throw new AssertionException("invalid value for 'country_code', the character length must be bigger than or equal to 2.");
        }

        if (!preg_match("/^[A-Z]{2}$/", $this->container['country_code'])) {
            throw new AssertionException("invalid value for 'country_code', must be conform to the pattern /^[A-Z]{2}$/.");
        }

        if ($this->container['name'] === null) {
            throw new AssertionException("'name' can't be null");
        }

        if ((mb_strlen($this->container['name']) > 50)) {
            throw new AssertionException("invalid value for 'name', the character length must be smaller than or equal to 50.");
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            throw new AssertionException("invalid value for 'name', the character length must be bigger than or equal to 1.");
        }

        if ($this->container['postal_code'] === null) {
            throw new AssertionException("'postal_code' can't be null");
        }

        if ((mb_strlen($this->container['postal_code']) > 32)) {
            throw new AssertionException("invalid value for 'postal_code', the character length must be smaller than or equal to 32.");
        }

        if ((mb_strlen($this->container['postal_code']) < 1)) {
            throw new AssertionException("invalid value for 'postal_code', the character length must be bigger than or equal to 1.");
        }

        if (!is_null($this->container['state_or_province_code']) && (mb_strlen($this->container['state_or_province_code']) > 64)) {
            throw new AssertionException("invalid value for 'state_or_province_code', the character length must be smaller than or equal to 64.");
        }

        if (!is_null($this->container['state_or_province_code']) && (mb_strlen($this->container['state_or_province_code']) < 1)) {
            throw new AssertionException("invalid value for 'state_or_province_code', the character length must be bigger than or equal to 1.");
        }

    }


    /**
     * Gets address_line1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1
     *
     * @param string $address_line1 Street address information.
     *
     * @return self
     */
    public function setAddressLine1($address_line1) : self
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2
     *
     * @return string|null
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2
     *
     * @param string|null $address_line2 Additional street address information.
     *
     * @return self
     */
    public function setAddressLine2($address_line2) : self
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city The city.
     *
     * @return self
     */
    public function setCity($city) : self
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string|null
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string|null $company_name The name of the business.
     *
     * @return self
     */
    public function setCompanyName($company_name) : self
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string $country_code The country code in two-character ISO 3166-1 alpha-2 format.
     *
     * @return self
     */
    public function setCountryCode($country_code) : self
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the individual or business.
     *
     * @return self
     */
    public function setName($name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code The postal code.
     *
     * @return self
     */
    public function setPostalCode($postal_code) : self
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets state_or_province_code
     *
     * @return string|null
     */
    public function getStateOrProvinceCode()
    {
        return $this->container['state_or_province_code'];
    }

    /**
     * Sets state_or_province_code
     *
     * @param string|null $state_or_province_code The state or province code.
     *
     * @return self
     */
    public function setStateOrProvinceCode($state_or_province_code) : self
    {
        $this->container['state_or_province_code'] = $state_or_province_code;

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

