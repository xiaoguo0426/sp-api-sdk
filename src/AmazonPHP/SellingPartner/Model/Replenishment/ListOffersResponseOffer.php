<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Replenishment;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Replenishment
*
* The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery of any replenishable item at a frequency chosen by the customer.  The Replenishment API is available worldwide wherever Amazon Subscribe & Save is available or is supported. The API is available to vendors and FBA selling partners.
*
* The version of the OpenAPI document: 2022-11-07
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ListOffersResponseOffer implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ListOffersResponseOffer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'sku' => 'string',
        'asin' => 'string',
        'marketplace_id' => 'string',
        'eligibility' => '\AmazonPHP\SellingPartner\Model\Replenishment\EligibilityStatus',
        'offer_program_configuration' => '\AmazonPHP\SellingPartner\Model\Replenishment\OfferProgramConfiguration',
        'program_type' => '\AmazonPHP\SellingPartner\Model\Replenishment\ProgramType',
        'vendor_codes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'sku' => null,
        'asin' => null,
        'marketplace_id' => null,
        'eligibility' => null,
        'offer_program_configuration' => null,
        'program_type' => null,
        'vendor_codes' => null
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
        'sku' => 'sku',
        'asin' => 'asin',
        'marketplace_id' => 'marketplaceId',
        'eligibility' => 'eligibility',
        'offer_program_configuration' => 'offerProgramConfiguration',
        'program_type' => 'programType',
        'vendor_codes' => 'vendorCodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'sku' => 'setSku',
        'asin' => 'setAsin',
        'marketplace_id' => 'setMarketplaceId',
        'eligibility' => 'setEligibility',
        'offer_program_configuration' => 'setOfferProgramConfiguration',
        'program_type' => 'setProgramType',
        'vendor_codes' => 'setVendorCodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'sku' => 'getSku',
        'asin' => 'getAsin',
        'marketplace_id' => 'getMarketplaceId',
        'eligibility' => 'getEligibility',
        'offer_program_configuration' => 'getOfferProgramConfiguration',
        'program_type' => 'getProgramType',
        'vendor_codes' => 'getVendorCodes'
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
        $this->container['sku'] = $data['sku'] ?? null;
        $this->container['asin'] = $data['asin'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['eligibility'] = $data['eligibility'] ?? null;
        $this->container['offer_program_configuration'] = $data['offer_program_configuration'] ?? null;
        $this->container['program_type'] = $data['program_type'] ?? null;
        $this->container['vendor_codes'] = $data['vendor_codes'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['offer_program_configuration'] !== null) {
            $this->container['offer_program_configuration']->validate();
            }

    }


    /**
     * Gets sku
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string|null $sku The SKU. This property is only supported for sellers and not for vendors.
     *
     * @return self
     */
    public function setSku($sku) : self
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets asin
     *
     * @return string|null
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin
     *
     * @param string|null $asin The Amazon Standard Identification Number (ASIN).
     *
     * @return self
     */
    public function setAsin($asin) : self
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id The marketplace identifier. The supported marketplaces for both sellers and vendors are US, CA, ES, UK, FR, IT, IN, DE and JP. The supported marketplaces for vendors only are BR, AU, MX, AE and NL. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) to find the identifier for the marketplace.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets eligibility
     *
     * @return \AmazonPHP\SellingPartner\Model\Replenishment\EligibilityStatus|null
     */
    public function getEligibility()
    {
        return $this->container['eligibility'];
    }

    /**
     * Sets eligibility
     *
     * @param \AmazonPHP\SellingPartner\Model\Replenishment\EligibilityStatus|null $eligibility eligibility
     *
     * @return self
     */
    public function setEligibility($eligibility) : self
    {
        $this->container['eligibility'] = $eligibility;

        return $this;
    }

    /**
     * Gets offer_program_configuration
     *
     * @return \AmazonPHP\SellingPartner\Model\Replenishment\OfferProgramConfiguration|null
     */
    public function getOfferProgramConfiguration()
    {
        return $this->container['offer_program_configuration'];
    }

    /**
     * Sets offer_program_configuration
     *
     * @param \AmazonPHP\SellingPartner\Model\Replenishment\OfferProgramConfiguration|null $offer_program_configuration offer_program_configuration
     *
     * @return self
     */
    public function setOfferProgramConfiguration($offer_program_configuration) : self
    {
        $this->container['offer_program_configuration'] = $offer_program_configuration;

        return $this;
    }

    /**
     * Gets program_type
     *
     * @return \AmazonPHP\SellingPartner\Model\Replenishment\ProgramType|null
     */
    public function getProgramType()
    {
        return $this->container['program_type'];
    }

    /**
     * Sets program_type
     *
     * @param \AmazonPHP\SellingPartner\Model\Replenishment\ProgramType|null $program_type program_type
     *
     * @return self
     */
    public function setProgramType($program_type) : self
    {
        $this->container['program_type'] = $program_type;

        return $this;
    }

    /**
     * Gets vendor_codes
     *
     * @return string[]|null
     */
    public function getVendorCodes()
    {
        return $this->container['vendor_codes'];
    }

    /**
     * Sets vendor_codes
     *
     * @param string[]|null $vendor_codes A list of vendor codes associated with the offer.
     *
     * @return self
     */
    public function setVendorCodes($vendor_codes) : self
    {
        $this->container['vendor_codes'] = $vendor_codes;

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

