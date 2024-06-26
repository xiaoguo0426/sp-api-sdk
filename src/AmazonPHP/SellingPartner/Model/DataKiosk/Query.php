<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\DataKiosk;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Data Kiosk
*
* The Selling Partner API for Data Kiosk lets you submit GraphQL queries from a variety of schemas to help selling partners manage their businesses.
*
* The version of the OpenAPI document: 2023-11-15
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Query implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Query';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'query_id' => 'string',
        'query' => 'string',
        'created_time' => '\DateTimeInterface',
        'processing_status' => 'string',
        'processing_start_time' => '\DateTimeInterface',
        'processing_end_time' => '\DateTimeInterface',
        'data_document_id' => 'string',
        'error_document_id' => 'string',
        'pagination' => '\AmazonPHP\SellingPartner\Model\DataKiosk\QueryPagination'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'query_id' => null,
        'query' => null,
        'created_time' => 'date-time',
        'processing_status' => null,
        'processing_start_time' => 'date-time',
        'processing_end_time' => 'date-time',
        'data_document_id' => null,
        'error_document_id' => null,
        'pagination' => null
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
        'query_id' => 'queryId',
        'query' => 'query',
        'created_time' => 'createdTime',
        'processing_status' => 'processingStatus',
        'processing_start_time' => 'processingStartTime',
        'processing_end_time' => 'processingEndTime',
        'data_document_id' => 'dataDocumentId',
        'error_document_id' => 'errorDocumentId',
        'pagination' => 'pagination'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'query_id' => 'setQueryId',
        'query' => 'setQuery',
        'created_time' => 'setCreatedTime',
        'processing_status' => 'setProcessingStatus',
        'processing_start_time' => 'setProcessingStartTime',
        'processing_end_time' => 'setProcessingEndTime',
        'data_document_id' => 'setDataDocumentId',
        'error_document_id' => 'setErrorDocumentId',
        'pagination' => 'setPagination'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'query_id' => 'getQueryId',
        'query' => 'getQuery',
        'created_time' => 'getCreatedTime',
        'processing_status' => 'getProcessingStatus',
        'processing_start_time' => 'getProcessingStartTime',
        'processing_end_time' => 'getProcessingEndTime',
        'data_document_id' => 'getDataDocumentId',
        'error_document_id' => 'getErrorDocumentId',
        'pagination' => 'getPagination'
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

    const PROCESSING_STATUS_CANCELLED = 'CANCELLED';
    const PROCESSING_STATUS_DONE = 'DONE';
    const PROCESSING_STATUS_FATAL = 'FATAL';
    const PROCESSING_STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const PROCESSING_STATUS_IN_QUEUE = 'IN_QUEUE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProcessingStatusAllowableValues() : array
    {
        return [
            self::PROCESSING_STATUS_CANCELLED,
            self::PROCESSING_STATUS_DONE,
            self::PROCESSING_STATUS_FATAL,
            self::PROCESSING_STATUS_IN_PROGRESS,
            self::PROCESSING_STATUS_IN_QUEUE,
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
        $this->container['query_id'] = $data['query_id'] ?? null;
        $this->container['query'] = $data['query'] ?? null;
        $this->container['created_time'] = $data['created_time'] ?? null;
        $this->container['processing_status'] = $data['processing_status'] ?? null;
        $this->container['processing_start_time'] = $data['processing_start_time'] ?? null;
        $this->container['processing_end_time'] = $data['processing_end_time'] ?? null;
        $this->container['data_document_id'] = $data['data_document_id'] ?? null;
        $this->container['error_document_id'] = $data['error_document_id'] ?? null;
        $this->container['pagination'] = $data['pagination'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['query_id'] === null) {
            throw new AssertionException("'query_id' can't be null");
        }

        if ($this->container['query'] === null) {
            throw new AssertionException("'query' can't be null");
        }

        if ($this->container['created_time'] === null) {
            throw new AssertionException("'created_time' can't be null");
        }

        if ($this->container['processing_status'] === null) {
            throw new AssertionException("'processing_status' can't be null");
        }

        $allowedValues = $this->getProcessingStatusAllowableValues();
        if (!is_null($this->container['processing_status']) && !in_array($this->container['processing_status'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'processing_status', must be one of '%s'",
                    $this->container['processing_status'],
                    implode("', '", $allowedValues)
                )
            );
        }

            if ($this->container['pagination'] !== null) {
            $this->container['pagination']->validate();
            }

    }


    /**
     * Gets query_id
     *
     * @return string
     */
    public function getQueryId()
    {
        return $this->container['query_id'];
    }

    /**
     * Sets query_id
     *
     * @param string $query_id The query identifier. This identifier is unique only in combination with a selling partner account ID.
     *
     * @return self
     */
    public function setQueryId($query_id) : self
    {
        $this->container['query_id'] = $query_id;

        return $this;
    }

    /**
     * Gets query
     *
     * @return string
     */
    public function getQuery()
    {
        return $this->container['query'];
    }

    /**
     * Sets query
     *
     * @param string $query The submitted query.
     *
     * @return self
     */
    public function setQuery($query) : self
    {
        $this->container['query'] = $query;

        return $this;
    }

    /**
     * Gets created_time
     *
     * @return \DateTimeInterface
     */
    public function getCreatedTime()
    {
        return $this->container['created_time'];
    }

    /**
     * Sets created_time
     *
     * @param \DateTimeInterface $created_time The date and time when the query was created, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setCreatedTime($created_time) : self
    {
        $this->container['created_time'] = $created_time;

        return $this;
    }

    /**
     * Gets processing_status
     *
     * @return string
     */
    public function getProcessingStatus()
    {
        return $this->container['processing_status'];
    }

    /**
     * Sets processing_status
     *
     * @param string $processing_status The processing status of the query.
     *
     * @return self
     */
    public function setProcessingStatus($processing_status) : self
    {
        $this->container['processing_status'] = $processing_status;

        return $this;
    }

    /**
     * Gets processing_start_time
     *
     * @return \DateTimeInterface|null
     */
    public function getProcessingStartTime()
    {
        return $this->container['processing_start_time'];
    }

    /**
     * Sets processing_start_time
     *
     * @param \DateTimeInterface|null $processing_start_time The date and time when the query processing started, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setProcessingStartTime($processing_start_time) : self
    {
        $this->container['processing_start_time'] = $processing_start_time;

        return $this;
    }

    /**
     * Gets processing_end_time
     *
     * @return \DateTimeInterface|null
     */
    public function getProcessingEndTime()
    {
        return $this->container['processing_end_time'];
    }

    /**
     * Sets processing_end_time
     *
     * @param \DateTimeInterface|null $processing_end_time The date and time when the query processing completed, in ISO 8601 date time format.
     *
     * @return self
     */
    public function setProcessingEndTime($processing_end_time) : self
    {
        $this->container['processing_end_time'] = $processing_end_time;

        return $this;
    }

    /**
     * Gets data_document_id
     *
     * @return string|null
     */
    public function getDataDocumentId()
    {
        return $this->container['data_document_id'];
    }

    /**
     * Sets data_document_id
     *
     * @param string|null $data_document_id The data document identifier. This identifier is only present when there is data available as a result of the query. This identifier is unique only in combination with a selling partner account ID. Pass this identifier into the `getDocument` operation to get the information required to retrieve the data document's contents.
     *
     * @return self
     */
    public function setDataDocumentId($data_document_id) : self
    {
        $this->container['data_document_id'] = $data_document_id;

        return $this;
    }

    /**
     * Gets error_document_id
     *
     * @return string|null
     */
    public function getErrorDocumentId()
    {
        return $this->container['error_document_id'];
    }

    /**
     * Sets error_document_id
     *
     * @param string|null $error_document_id The error document identifier. This identifier is only present when an error occurs during query processing. This identifier is unique only in combination with a selling partner account ID. Pass this identifier into the `getDocument` operation to get the information required to retrieve the error document's contents.
     *
     * @return self
     */
    public function setErrorDocumentId($error_document_id) : self
    {
        $this->container['error_document_id'] = $error_document_id;

        return $this;
    }

    /**
     * Gets pagination
     *
     * @return \AmazonPHP\SellingPartner\Model\DataKiosk\QueryPagination|null
     */
    public function getPagination()
    {
        return $this->container['pagination'];
    }

    /**
     * Sets pagination
     *
     * @param \AmazonPHP\SellingPartner\Model\DataKiosk\QueryPagination|null $pagination pagination
     *
     * @return self
     */
    public function setPagination($pagination) : self
    {
        $this->container['pagination'] = $pagination;

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

