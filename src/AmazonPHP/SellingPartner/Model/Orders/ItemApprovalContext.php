<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Orders;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 *
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemApprovalContext implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemApprovalContext';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'approval_type' => '\AmazonPHP\SellingPartner\Model\Orders\ItemApprovalType',
        'approval_status' => '\AmazonPHP\SellingPartner\Model\Orders\ItemApprovalStatus',
        'approval_support_data' => '\AmazonPHP\SellingPartner\Model\Orders\ApprovalSupportDataElement[]',
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
        'approval_type' => null,
        'approval_status' => null,
        'approval_support_data' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'approval_type' => 'ApprovalType',
        'approval_status' => 'ApprovalStatus',
        'approval_support_data' => 'ApprovalSupportData',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'approval_type' => 'setApprovalType',
        'approval_status' => 'setApprovalStatus',
        'approval_support_data' => 'setApprovalSupportData',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'approval_type' => 'getApprovalType',
        'approval_status' => 'getApprovalStatus',
        'approval_support_data' => 'getApprovalSupportData',
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
        $this->container['approval_type'] = $data['approval_type'] ?? null;
        $this->container['approval_status'] = $data['approval_status'] ?? null;
        $this->container['approval_support_data'] = $data['approval_support_data'] ?? null;
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
        if ($this->container['approval_type'] === null) {
            throw new AssertionException("'approval_type' can't be null");
        }

        if ($this->container['approval_status'] === null) {
            throw new AssertionException("'approval_status' can't be null");
        }
    }

    /**
     * Gets approval_type.
     */
    public function getApprovalType() : ItemApprovalType
    {
        return $this->container['approval_type'];
    }

    /**
     * Sets approval_type.
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\ItemApprovalType $approval_type approval_type
     */
    public function setApprovalType(ItemApprovalType $approval_type) : self
    {
        $this->container['approval_type'] = $approval_type;

        return $this;
    }

    /**
     * Gets approval_status.
     */
    public function getApprovalStatus() : ItemApprovalStatus
    {
        return $this->container['approval_status'];
    }

    /**
     * Sets approval_status.
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\ItemApprovalStatus $approval_status approval_status
     */
    public function setApprovalStatus(ItemApprovalStatus $approval_status) : self
    {
        $this->container['approval_status'] = $approval_status;

        return $this;
    }

    /**
     * Gets approval_support_data.
     *
     * @return null|\AmazonPHP\SellingPartner\Model\Orders\ApprovalSupportDataElement[]
     */
    public function getApprovalSupportData() : ?array
    {
        return $this->container['approval_support_data'];
    }

    /**
     * Sets approval_support_data.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\ApprovalSupportDataElement[] $approval_support_data List of additional data elements supporting the approval process. Check the applicable restrictions at the specific approval type schemas.
     */
    public function setApprovalSupportData(?array $approval_support_data) : self
    {
        $this->container['approval_support_data'] = $approval_support_data;

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
