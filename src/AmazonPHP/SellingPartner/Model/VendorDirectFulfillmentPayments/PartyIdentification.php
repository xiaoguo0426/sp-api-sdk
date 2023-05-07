<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Direct Fulfillment Payments.
 *
 * The Selling Partner API for Direct Fulfillment Payments provides programmatic access to a direct fulfillment vendor's invoice data.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PartyIdentification implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'PartyIdentification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'party_id' => 'string',
        'address' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Address',
        'tax_registration_details' => '\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxRegistrationDetail[]',
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
        'party_id' => null,
        'address' => null,
        'tax_registration_details' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'party_id' => 'partyId',
        'address' => 'address',
        'tax_registration_details' => 'taxRegistrationDetails',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'party_id' => 'setPartyId',
        'address' => 'setAddress',
        'tax_registration_details' => 'setTaxRegistrationDetails',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'party_id' => 'getPartyId',
        'address' => 'getAddress',
        'tax_registration_details' => 'getTaxRegistrationDetails',
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
        $this->container['party_id'] = $data['party_id'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
        $this->container['tax_registration_details'] = $data['tax_registration_details'] ?? null;
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
        if ($this->container['party_id'] === null) {
            throw new AssertionException("'party_id' can't be null");
        }

        if ($this->container['address'] !== null) {
            $this->container['address']->validate();
        }
    }

    /**
     * Gets party_id.
     *
     * @return string
     */
    public function getPartyId() : string
    {
        return $this->container['party_id'];
    }

    /**
     * Sets party_id.
     *
     * @param string $party_id assigned Identification for the party
     */
    public function setPartyId(string $party_id) : self
    {
        $this->container['party_id'] = $party_id;

        return $this;
    }

    /**
     * Gets address.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Address
     */
    public function getAddress() : ?Address
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\Address $address address
     */
    public function setAddress(?Address $address) : self
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets tax_registration_details.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxRegistrationDetail[]
     */
    public function getTaxRegistrationDetails() : ?array
    {
        return $this->container['tax_registration_details'];
    }

    /**
     * Sets tax_registration_details.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\VendorDirectFulfillmentPayments\TaxRegistrationDetail[] $tax_registration_details tax registration details of the entity
     */
    public function setTaxRegistrationDetails(?array $tax_registration_details) : self
    {
        $this->container['tax_registration_details'] = $tax_registration_details;

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
