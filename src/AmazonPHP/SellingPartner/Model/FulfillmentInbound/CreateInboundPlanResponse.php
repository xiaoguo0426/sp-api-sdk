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
class CreateInboundPlanResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'CreateInboundPlanResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'inbound_plan_id' => 'string',
        'operation_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'inbound_plan_id' => null,
        'operation_id' => null
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
        'inbound_plan_id' => 'inboundPlanId',
        'operation_id' => 'operationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'inbound_plan_id' => 'setInboundPlanId',
        'operation_id' => 'setOperationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'inbound_plan_id' => 'getInboundPlanId',
        'operation_id' => 'getOperationId'
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
        $this->container['inbound_plan_id'] = $data['inbound_plan_id'] ?? null;
        $this->container['operation_id'] = $data['operation_id'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['inbound_plan_id'] === null) {
            throw new AssertionException("'inbound_plan_id' can't be null");
        }

        if ((mb_strlen($this->container['inbound_plan_id']) > 38)) {
            throw new AssertionException("invalid value for 'inbound_plan_id', the character length must be smaller than or equal to 38.");
        }

        if ((mb_strlen($this->container['inbound_plan_id']) < 38)) {
            throw new AssertionException("invalid value for 'inbound_plan_id', the character length must be bigger than or equal to 38.");
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['inbound_plan_id'])) {
            throw new AssertionException("invalid value for 'inbound_plan_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if ($this->container['operation_id'] === null) {
            throw new AssertionException("'operation_id' can't be null");
        }

        if ((mb_strlen($this->container['operation_id']) > 38)) {
            throw new AssertionException("invalid value for 'operation_id', the character length must be smaller than or equal to 38.");
        }

        if ((mb_strlen($this->container['operation_id']) < 36)) {
            throw new AssertionException("invalid value for 'operation_id', the character length must be bigger than or equal to 36.");
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['operation_id'])) {
            throw new AssertionException("invalid value for 'operation_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

    }


    /**
     * Gets inbound_plan_id
     *
     * @return string
     */
    public function getInboundPlanId()
    {
        return $this->container['inbound_plan_id'];
    }

    /**
     * Sets inbound_plan_id
     *
     * @param string $inbound_plan_id Identifier to an inbound plan.
     *
     * @return self
     */
    public function setInboundPlanId($inbound_plan_id) : self
    {
        $this->container['inbound_plan_id'] = $inbound_plan_id;

        return $this;
    }

    /**
     * Gets operation_id
     *
     * @return string
     */
    public function getOperationId()
    {
        return $this->container['operation_id'];
    }

    /**
     * Sets operation_id
     *
     * @param string $operation_id UUID for the given operation.
     *
     * @return self
     */
    public function setOperationId($operation_id) : self
    {
        $this->container['operation_id'] = $operation_id;

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

