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
class BoxUpdateInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'BoxUpdateInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'content_information_source' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentInformationSource',
        'dimensions' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions',
        'items' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ItemInput[]',
        'package_id' => 'string',
        'quantity' => 'int',
        'weight' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'content_information_source' => null,
        'dimensions' => null,
        'items' => null,
        'package_id' => null,
        'quantity' => null,
        'weight' => null
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
        'content_information_source' => 'contentInformationSource',
        'dimensions' => 'dimensions',
        'items' => 'items',
        'package_id' => 'packageId',
        'quantity' => 'quantity',
        'weight' => 'weight'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'content_information_source' => 'setContentInformationSource',
        'dimensions' => 'setDimensions',
        'items' => 'setItems',
        'package_id' => 'setPackageId',
        'quantity' => 'setQuantity',
        'weight' => 'setWeight'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'content_information_source' => 'getContentInformationSource',
        'dimensions' => 'getDimensions',
        'items' => 'getItems',
        'package_id' => 'getPackageId',
        'quantity' => 'getQuantity',
        'weight' => 'getWeight'
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
        $this->container['content_information_source'] = $data['content_information_source'] ?? null;
        $this->container['dimensions'] = $data['dimensions'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
        $this->container['package_id'] = $data['package_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['weight'] = $data['weight'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['content_information_source'] === null) {
            throw new AssertionException("'content_information_source' can't be null");
        }

        if ($this->container['dimensions'] === null) {
            throw new AssertionException("'dimensions' can't be null");
        }

            $this->container['dimensions']->validate();

        if (!is_null($this->container['package_id']) && (mb_strlen($this->container['package_id']) > 38)) {
            throw new AssertionException("invalid value for 'package_id', the character length must be smaller than or equal to 38.");
        }

        if (!is_null($this->container['package_id']) && (mb_strlen($this->container['package_id']) < 38)) {
            throw new AssertionException("invalid value for 'package_id', the character length must be bigger than or equal to 38.");
        }

        if (!is_null($this->container['package_id']) && !preg_match("/^[a-zA-Z0-9-]*$/", $this->container['package_id'])) {
            throw new AssertionException("invalid value for 'package_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['quantity'] === null) {
            throw new AssertionException("'quantity' can't be null");
        }

        if (($this->container['quantity'] > 10000)) {
            throw new AssertionException("invalid value for 'quantity', must be smaller than or equal to 10000.");
        }

        if (($this->container['quantity'] < 1)) {
            throw new AssertionException("invalid value for 'quantity', must be bigger than or equal to 1.");
        }

        if ($this->container['weight'] === null) {
            throw new AssertionException("'weight' can't be null");
        }

            $this->container['weight']->validate();

    }


    /**
     * Gets content_information_source
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentInformationSource
     */
    public function getContentInformationSource()
    {
        return $this->container['content_information_source'];
    }

    /**
     * Sets content_information_source
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\BoxContentInformationSource $content_information_source content_information_source
     *
     * @return self
     */
    public function setContentInformationSource($content_information_source) : self
    {
        $this->container['content_information_source'] = $content_information_source;

        return $this;
    }

    /**
     * Gets dimensions
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dimensions $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions) : self
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ItemInput[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ItemInput[]|null $items The items and their quantity in the box. This must be empty if the box `contentInformationSource` is `BARCODE_2D` or `MANUAL_PROCESS`.
     *
     * @return self
     */
    public function setItems($items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets package_id
     *
     * @return string|null
     */
    public function getPackageId()
    {
        return $this->container['package_id'];
    }

    /**
     * Sets package_id
     *
     * @param string|null $package_id Primary key to uniquely identify a Box Package. PackageId must be provided if the intent is to update an existing box. Adding a new box will not require providing this value. Any existing PackageIds not provided will be treated as to-be-removed
     *
     * @return self
     */
    public function setPackageId($package_id) : self
    {
        $this->container['package_id'] = $package_id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity The number of containers where all other properties like weight or dimensions are identical.
     *
     * @return self
     */
    public function setQuantity($quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Weight $weight weight
     *
     * @return self
     */
    public function setWeight($weight) : self
    {
        $this->container['weight'] = $weight;

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

