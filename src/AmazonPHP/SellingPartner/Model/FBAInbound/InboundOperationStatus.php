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
class InboundOperationStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'InboundOperationStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'operation' => 'string',
        'operation_id' => 'string',
        'operation_problems' => '\AmazonPHP\SellingPartner\Model\FBAInbound\OperationProblem[]',
        'operation_status' => '\AmazonPHP\SellingPartner\Model\FBAInbound\OperationStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'operation' => null,
        'operation_id' => null,
        'operation_problems' => null,
        'operation_status' => null
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
        'operation' => 'operation',
        'operation_id' => 'operationId',
        'operation_problems' => 'operationProblems',
        'operation_status' => 'operationStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'operation' => 'setOperation',
        'operation_id' => 'setOperationId',
        'operation_problems' => 'setOperationProblems',
        'operation_status' => 'setOperationStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'operation' => 'getOperation',
        'operation_id' => 'getOperationId',
        'operation_problems' => 'getOperationProblems',
        'operation_status' => 'getOperationStatus'
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
        $this->container['operation'] = $data['operation'] ?? null;
        $this->container['operation_id'] = $data['operation_id'] ?? null;
        $this->container['operation_problems'] = $data['operation_problems'] ?? null;
        $this->container['operation_status'] = $data['operation_status'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['operation'] === null) {
            throw new AssertionException("'operation' can't be null");
        }

        if ((mb_strlen($this->container['operation']) > 1024)) {
            throw new AssertionException("invalid value for 'operation', the character length must be smaller than or equal to 1024.");
        }

        if ((mb_strlen($this->container['operation']) < 1)) {
            throw new AssertionException("invalid value for 'operation', the character length must be bigger than or equal to 1.");
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

        if ($this->container['operation_problems'] === null) {
            throw new AssertionException("'operation_problems' can't be null");
        }

        if ($this->container['operation_status'] === null) {
            throw new AssertionException("'operation_status' can't be null");
        }

    }


    /**
     * Gets operation
     *
     * @return string
     */
    public function getOperation()
    {
        return $this->container['operation'];
    }

    /**
     * Sets operation
     *
     * @param string $operation The name of the operation that was executed in the asynchronous API call.
     *
     * @return self
     */
    public function setOperation($operation) : self
    {
        $this->container['operation'] = $operation;

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
     * @param string $operation_id The operation Id returned by the asynchronous API call.
     *
     * @return self
     */
    public function setOperationId($operation_id) : self
    {
        $this->container['operation_id'] = $operation_id;

        return $this;
    }

    /**
     * Gets operation_problems
     *
     * @return \AmazonPHP\SellingPartner\Model\FBAInbound\OperationProblem[]
     */
    public function getOperationProblems()
    {
        return $this->container['operation_problems'];
    }

    /**
     * Sets operation_problems
     *
     * @param \AmazonPHP\SellingPartner\Model\FBAInbound\OperationProblem[] $operation_problems The problems in the processing of the asynchronous operation.
     *
     * @return self
     */
    public function setOperationProblems($operation_problems) : self
    {
        $this->container['operation_problems'] = $operation_problems;

        return $this;
    }

    /**
     * Gets operation_status
     *
     * @return \AmazonPHP\SellingPartner\Model\FBAInbound\OperationStatus
     */
    public function getOperationStatus()
    {
        return $this->container['operation_status'];
    }

    /**
     * Sets operation_status
     *
     * @param \AmazonPHP\SellingPartner\Model\FBAInbound\OperationStatus $operation_status operation_status
     *
     * @return self
     */
    public function setOperationStatus($operation_status) : self
    {
        $this->container['operation_status'] = $operation_status;

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

