<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentShipping;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Direct Fulfillment Shipping.
 *
 * The Selling Partner API for Direct Fulfillment Shipping provides programmatic access to a direct fulfillment vendor's shipping data.
 *
 * The version of the OpenAPI document: 2021-12-28
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Address implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Address';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'name' => 'string',
        'address_line1' => 'string',
        'address_line2' => 'string',
        'address_line3' => 'string',
        'city' => 'string',
        'county' => 'string',
        'district' => 'string',
        'state_or_region' => 'string',
        'postal_code' => 'string',
        'country_code' => 'string',
        'phone' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'name' => null,
        'address_line1' => null,
        'address_line2' => null,
        'address_line3' => null,
        'city' => null,
        'county' => null,
        'district' => null,
        'state_or_region' => null,
        'postal_code' => null,
        'country_code' => null,
        'phone' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'address_line1' => 'addressLine1',
        'address_line2' => 'addressLine2',
        'address_line3' => 'addressLine3',
        'city' => 'city',
        'county' => 'county',
        'district' => 'district',
        'state_or_region' => 'stateOrRegion',
        'postal_code' => 'postalCode',
        'country_code' => 'countryCode',
        'phone' => 'phone',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'name' => 'setName',
        'address_line1' => 'setAddressLine1',
        'address_line2' => 'setAddressLine2',
        'address_line3' => 'setAddressLine3',
        'city' => 'setCity',
        'county' => 'setCounty',
        'district' => 'setDistrict',
        'state_or_region' => 'setStateOrRegion',
        'postal_code' => 'setPostalCode',
        'country_code' => 'setCountryCode',
        'phone' => 'setPhone',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'name' => 'getName',
        'address_line1' => 'getAddressLine1',
        'address_line2' => 'getAddressLine2',
        'address_line3' => 'getAddressLine3',
        'city' => 'getCity',
        'county' => 'getCounty',
        'district' => 'getDistrict',
        'state_or_region' => 'getStateOrRegion',
        'postal_code' => 'getPostalCode',
        'country_code' => 'getCountryCode',
        'phone' => 'getPhone',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['name'] = $data['name'] ?? null;
        $this->container['address_line1'] = $data['address_line1'] ?? null;
        $this->container['address_line2'] = $data['address_line2'] ?? null;
        $this->container['address_line3'] = $data['address_line3'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['county'] = $data['county'] ?? null;
        $this->container['district'] = $data['district'] ?? null;
        $this->container['state_or_region'] = $data['state_or_region'] ?? null;
        $this->container['postal_code'] = $data['postal_code'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['phone'] = $data['phone'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return (string) \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['name'] === null) {
            throw new AssertionException("'name' can't be null");
        }

        if ($this->container['address_line1'] === null) {
            throw new AssertionException("'address_line1' can't be null");
        }

        if ($this->container['country_code'] === null) {
            throw new AssertionException("'country_code' can't be null");
        }
    }

    /**
     * Gets name.
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name the name of the person, business or institution at that address
     */
    public function setName(string $name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1.
     *
     * @return string
     */
    public function getAddressLine1() : string
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1.
     *
     * @param string $address_line1 first line of the address
     */
    public function setAddressLine1(string $address_line1) : self
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2.
     *
     * @return null|string
     */
    public function getAddressLine2() : ?string
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2.
     *
     * @param null|string $address_line2 additional street address information, if required
     */
    public function setAddressLine2(?string $address_line2) : self
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3.
     *
     * @return null|string
     */
    public function getAddressLine3() : ?string
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3.
     *
     * @param null|string $address_line3 additional street address information, if required
     */
    public function setAddressLine3(?string $address_line3) : self
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets city.
     *
     * @return null|string
     */
    public function getCity() : ?string
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param null|string $city the city where the person, business or institution is located
     */
    public function setCity(?string $city) : self
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets county.
     *
     * @return null|string
     */
    public function getCounty() : ?string
    {
        return $this->container['county'];
    }

    /**
     * Sets county.
     *
     * @param null|string $county the county where person, business or institution is located
     */
    public function setCounty(?string $county) : self
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets district.
     *
     * @return null|string
     */
    public function getDistrict() : ?string
    {
        return $this->container['district'];
    }

    /**
     * Sets district.
     *
     * @param null|string $district the district where person, business or institution is located
     */
    public function setDistrict(?string $district) : self
    {
        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets state_or_region.
     *
     * @return null|string
     */
    public function getStateOrRegion() : ?string
    {
        return $this->container['state_or_region'];
    }

    /**
     * Sets state_or_region.
     *
     * @param null|string $state_or_region the state or region where person, business or institution is located
     */
    public function setStateOrRegion(?string $state_or_region) : self
    {
        $this->container['state_or_region'] = $state_or_region;

        return $this;
    }

    /**
     * Gets postal_code.
     *
     * @return null|string
     */
    public function getPostalCode() : ?string
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param null|string $postal_code The postal code of that address. It contains a series of letters or digits or both, sometimes including spaces or punctuation.
     */
    public function setPostalCode(?string $postal_code) : self
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_code.
     *
     * @return string
     */
    public function getCountryCode() : string
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param string $country_code the two digit country code in ISO 3166-1 alpha-2 format
     */
    public function setCountryCode(string $country_code) : self
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone.
     *
     * @return null|string
     */
    public function getPhone() : ?string
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone.
     *
     * @param null|string $phone the phone number of the person, business or institution located at that address
     */
    public function setPhone(?string $phone) : self
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset) : mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
