<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\ProductTypesDefinitions;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Product Type Definitions
*
* The Selling Partner API for Product Type Definitions provides programmatic access to attribute and data requirements for product types in the Amazon catalog. Use this API to return the JSON Schema for a product type that you can then use with other Selling Partner APIs, such as the Selling Partner API for Listings Items, the Selling Partner API for Catalog Items, and the Selling Partner API for Feeds (for JSON-based listing feeds).  For more information, see the [Product Type Definitions API Use Case Guide](doc:product-type-api-use-case-guide).
*
* The version of the OpenAPI document: 2020-09-01
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductTypeDefinition implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ProductTypeDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'meta_schema' => '\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink',
        'schema' => '\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink',
        'requirements' => 'string',
        'requirements_enforced' => 'string',
        'property_groups' => 'array<string,\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\PropertyGroup>',
        'locale' => 'string',
        'marketplace_ids' => 'string[]',
        'product_type' => 'string',
        'display_name' => 'string',
        'product_type_version' => '\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'meta_schema' => null,
        'schema' => null,
        'requirements' => null,
        'requirements_enforced' => null,
        'property_groups' => null,
        'locale' => null,
        'marketplace_ids' => null,
        'product_type' => null,
        'display_name' => null,
        'product_type_version' => null
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
        'meta_schema' => 'metaSchema',
        'schema' => 'schema',
        'requirements' => 'requirements',
        'requirements_enforced' => 'requirementsEnforced',
        'property_groups' => 'propertyGroups',
        'locale' => 'locale',
        'marketplace_ids' => 'marketplaceIds',
        'product_type' => 'productType',
        'display_name' => 'displayName',
        'product_type_version' => 'productTypeVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'meta_schema' => 'setMetaSchema',
        'schema' => 'setSchema',
        'requirements' => 'setRequirements',
        'requirements_enforced' => 'setRequirementsEnforced',
        'property_groups' => 'setPropertyGroups',
        'locale' => 'setLocale',
        'marketplace_ids' => 'setMarketplaceIds',
        'product_type' => 'setProductType',
        'display_name' => 'setDisplayName',
        'product_type_version' => 'setProductTypeVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'meta_schema' => 'getMetaSchema',
        'schema' => 'getSchema',
        'requirements' => 'getRequirements',
        'requirements_enforced' => 'getRequirementsEnforced',
        'property_groups' => 'getPropertyGroups',
        'locale' => 'getLocale',
        'marketplace_ids' => 'getMarketplaceIds',
        'product_type' => 'getProductType',
        'display_name' => 'getDisplayName',
        'product_type_version' => 'getProductTypeVersion'
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

    const REQUIREMENTS_LISTING = 'LISTING';
    const REQUIREMENTS_LISTING_PRODUCT_ONLY = 'LISTING_PRODUCT_ONLY';
    const REQUIREMENTS_LISTING_OFFER_ONLY = 'LISTING_OFFER_ONLY';
    const REQUIREMENTS_ENFORCED_ENFORCED = 'ENFORCED';
    const REQUIREMENTS_ENFORCED_NOT_ENFORCED = 'NOT_ENFORCED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirementsAllowableValues() : array
    {
        return [
            self::REQUIREMENTS_LISTING,
            self::REQUIREMENTS_LISTING_PRODUCT_ONLY,
            self::REQUIREMENTS_LISTING_OFFER_ONLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRequirementsEnforcedAllowableValues() : array
    {
        return [
            self::REQUIREMENTS_ENFORCED_ENFORCED,
            self::REQUIREMENTS_ENFORCED_NOT_ENFORCED,
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
        $this->container['meta_schema'] = $data['meta_schema'] ?? null;
        $this->container['schema'] = $data['schema'] ?? null;
        $this->container['requirements'] = $data['requirements'] ?? null;
        $this->container['requirements_enforced'] = $data['requirements_enforced'] ?? null;
        $this->container['property_groups'] = $data['property_groups'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['display_name'] = $data['display_name'] ?? null;
        $this->container['product_type_version'] = $data['product_type_version'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['meta_schema'] !== null) {
            $this->container['meta_schema']->validate();
            }

        if ($this->container['schema'] === null) {
            throw new AssertionException("'schema' can't be null");
        }

            $this->container['schema']->validate();

        if ($this->container['requirements'] === null) {
            throw new AssertionException("'requirements' can't be null");
        }

        $allowedValues = $this->getRequirementsAllowableValues();
        if (!is_null($this->container['requirements']) && !in_array($this->container['requirements'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'requirements', must be one of '%s'",
                    $this->container['requirements'],
                    implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['requirements_enforced'] === null) {
            throw new AssertionException("'requirements_enforced' can't be null");
        }

        $allowedValues = $this->getRequirementsEnforcedAllowableValues();
        if (!is_null($this->container['requirements_enforced']) && !in_array($this->container['requirements_enforced'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'requirements_enforced', must be one of '%s'",
                    $this->container['requirements_enforced'],
                    implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['property_groups'] === null) {
            throw new AssertionException("'property_groups' can't be null");
        }

        if ($this->container['locale'] === null) {
            throw new AssertionException("'locale' can't be null");
        }

        if ($this->container['marketplace_ids'] === null) {
            throw new AssertionException("'marketplace_ids' can't be null");
        }

        if ($this->container['product_type'] === null) {
            throw new AssertionException("'product_type' can't be null");
        }

        if ($this->container['display_name'] === null) {
            throw new AssertionException("'display_name' can't be null");
        }

        if ($this->container['product_type_version'] === null) {
            throw new AssertionException("'product_type_version' can't be null");
        }

            $this->container['product_type_version']->validate();

    }


    /**
     * Gets meta_schema
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink|null
     */
    public function getMetaSchema()
    {
        return $this->container['meta_schema'];
    }

    /**
     * Sets meta_schema
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink|null $meta_schema meta_schema
     *
     * @return self
     */
    public function setMetaSchema($meta_schema) : self
    {
        $this->container['meta_schema'] = $meta_schema;

        return $this;
    }

    /**
     * Gets schema
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink $schema schema
     *
     * @return self
     */
    public function setSchema($schema) : self
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return string
     */
    public function getRequirements()
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements
     *
     * @param string $requirements Name of the requirements set represented in this product type definition.
     *
     * @return self
     */
    public function setRequirements($requirements) : self
    {
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets requirements_enforced
     *
     * @return string
     */
    public function getRequirementsEnforced()
    {
        return $this->container['requirements_enforced'];
    }

    /**
     * Sets requirements_enforced
     *
     * @param string $requirements_enforced Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all of the required attributes being present (such as for partial updates).
     *
     * @return self
     */
    public function setRequirementsEnforced($requirements_enforced) : self
    {
        $this->container['requirements_enforced'] = $requirements_enforced;

        return $this;
    }

    /**
     * Gets property_groups
     *
     * @return array<string,\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\PropertyGroup>
     */
    public function getPropertyGroups()
    {
        return $this->container['property_groups'];
    }

    /**
     * Sets property_groups
     *
     * @param array<string,\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\PropertyGroup> $property_groups Mapping of property group names to property groups. Property groups represent logical groupings of schema properties that can be used for display or informational purposes.
     *
     * @return self
     */
    public function setPropertyGroups($property_groups) : self
    {
        $this->container['property_groups'] = $property_groups;

        return $this;
    }

    /**
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale Locale of the display elements contained in the product type definition.
     *
     * @return self
     */
    public function setLocale($locale) : self
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets marketplace_ids
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids
     *
     * @param string[] $marketplace_ids Amazon marketplace identifiers for which the product type definition is applicable.
     *
     * @return self
     */
    public function setMarketplaceIds($marketplace_ids) : self
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type The name of the Amazon product type that this product type definition applies to.
     *
     * @return self
     */
    public function setProductType($product_type) : self
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string $display_name Human-readable and localized description of the Amazon product type.
     *
     * @return self
     */
    public function setDisplayName($display_name) : self
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets product_type_version
     *
     * @return \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeVersion
     */
    public function getProductTypeVersion()
    {
        return $this->container['product_type_version'];
    }

    /**
     * Sets product_type_version
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeVersion $product_type_version product_type_version
     *
     * @return self
     */
    public function setProductTypeVersion($product_type_version) : self
    {
        $this->container['product_type_version'] = $product_type_version;

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

