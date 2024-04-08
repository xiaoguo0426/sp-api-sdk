<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\FulfillmentOutbound;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner APIs for Fulfillment Outbound
*
* The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
*
* The version of the OpenAPI document: 2020-07-01
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ReturnItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ReturnItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'seller_return_item_id' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'amazon_shipment_id' => 'string',
        'seller_return_reason_code' => 'string',
        'return_comment' => 'string',
        'amazon_return_reason_code' => 'string',
        'status' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentReturnItemStatus',
        'status_changed_date' => '\DateTimeInterface',
        'return_authorization_id' => 'string',
        'return_received_condition' => '\AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItemDisposition',
        'fulfillment_center_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'seller_return_item_id' => null,
        'seller_fulfillment_order_item_id' => null,
        'amazon_shipment_id' => null,
        'seller_return_reason_code' => null,
        'return_comment' => null,
        'amazon_return_reason_code' => null,
        'status' => null,
        'status_changed_date' => 'date-time',
        'return_authorization_id' => null,
        'return_received_condition' => null,
        'fulfillment_center_id' => null
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
        'seller_return_item_id' => 'sellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'amazonShipmentId',
        'seller_return_reason_code' => 'sellerReturnReasonCode',
        'return_comment' => 'returnComment',
        'amazon_return_reason_code' => 'amazonReturnReasonCode',
        'status' => 'status',
        'status_changed_date' => 'statusChangedDate',
        'return_authorization_id' => 'returnAuthorizationId',
        'return_received_condition' => 'returnReceivedCondition',
        'fulfillment_center_id' => 'fulfillmentCenterId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'seller_return_item_id' => 'setSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'setAmazonShipmentId',
        'seller_return_reason_code' => 'setSellerReturnReasonCode',
        'return_comment' => 'setReturnComment',
        'amazon_return_reason_code' => 'setAmazonReturnReasonCode',
        'status' => 'setStatus',
        'status_changed_date' => 'setStatusChangedDate',
        'return_authorization_id' => 'setReturnAuthorizationId',
        'return_received_condition' => 'setReturnReceivedCondition',
        'fulfillment_center_id' => 'setFulfillmentCenterId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'seller_return_item_id' => 'getSellerReturnItemId',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'amazon_shipment_id' => 'getAmazonShipmentId',
        'seller_return_reason_code' => 'getSellerReturnReasonCode',
        'return_comment' => 'getReturnComment',
        'amazon_return_reason_code' => 'getAmazonReturnReasonCode',
        'status' => 'getStatus',
        'status_changed_date' => 'getStatusChangedDate',
        'return_authorization_id' => 'getReturnAuthorizationId',
        'return_received_condition' => 'getReturnReceivedCondition',
        'fulfillment_center_id' => 'getFulfillmentCenterId'
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
        $this->container['seller_return_item_id'] = $data['seller_return_item_id'] ?? null;
        $this->container['seller_fulfillment_order_item_id'] = $data['seller_fulfillment_order_item_id'] ?? null;
        $this->container['amazon_shipment_id'] = $data['amazon_shipment_id'] ?? null;
        $this->container['seller_return_reason_code'] = $data['seller_return_reason_code'] ?? null;
        $this->container['return_comment'] = $data['return_comment'] ?? null;
        $this->container['amazon_return_reason_code'] = $data['amazon_return_reason_code'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['status_changed_date'] = $data['status_changed_date'] ?? null;
        $this->container['return_authorization_id'] = $data['return_authorization_id'] ?? null;
        $this->container['return_received_condition'] = $data['return_received_condition'] ?? null;
        $this->container['fulfillment_center_id'] = $data['fulfillment_center_id'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['seller_return_item_id'] === null) {
            throw new AssertionException("'seller_return_item_id' can't be null");
        }

        if ($this->container['seller_fulfillment_order_item_id'] === null) {
            throw new AssertionException("'seller_fulfillment_order_item_id' can't be null");
        }

        if ($this->container['amazon_shipment_id'] === null) {
            throw new AssertionException("'amazon_shipment_id' can't be null");
        }

        if ($this->container['seller_return_reason_code'] === null) {
            throw new AssertionException("'seller_return_reason_code' can't be null");
        }

        if ($this->container['status'] === null) {
            throw new AssertionException("'status' can't be null");
        }

        if ($this->container['status_changed_date'] === null) {
            throw new AssertionException("'status_changed_date' can't be null");
        }

    }


    /**
     * Gets seller_return_item_id
     *
     * @return string
     */
    public function getSellerReturnItemId()
    {
        return $this->container['seller_return_item_id'];
    }

    /**
     * Sets seller_return_item_id
     *
     * @param string $seller_return_item_id An identifier assigned by the seller to the return item.
     *
     * @return self
     */
    public function setSellerReturnItemId($seller_return_item_id) : self
    {
        $this->container['seller_return_item_id'] = $seller_return_item_id;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id
     *
     * @param string $seller_fulfillment_order_item_id The identifier assigned to the item by the seller when the fulfillment order was created.
     *
     * @return self
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id) : self
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets amazon_shipment_id
     *
     * @return string
     */
    public function getAmazonShipmentId()
    {
        return $this->container['amazon_shipment_id'];
    }

    /**
     * Sets amazon_shipment_id
     *
     * @param string $amazon_shipment_id The identifier for the shipment that is associated with the return item.
     *
     * @return self
     */
    public function setAmazonShipmentId($amazon_shipment_id) : self
    {
        $this->container['amazon_shipment_id'] = $amazon_shipment_id;

        return $this;
    }

    /**
     * Gets seller_return_reason_code
     *
     * @return string
     */
    public function getSellerReturnReasonCode()
    {
        return $this->container['seller_return_reason_code'];
    }

    /**
     * Sets seller_return_reason_code
     *
     * @param string $seller_return_reason_code The return reason code assigned to the return item by the seller.
     *
     * @return self
     */
    public function setSellerReturnReasonCode($seller_return_reason_code) : self
    {
        $this->container['seller_return_reason_code'] = $seller_return_reason_code;

        return $this;
    }

    /**
     * Gets return_comment
     *
     * @return string|null
     */
    public function getReturnComment()
    {
        return $this->container['return_comment'];
    }

    /**
     * Sets return_comment
     *
     * @param string|null $return_comment An optional comment about the return item.
     *
     * @return self
     */
    public function setReturnComment($return_comment) : self
    {
        $this->container['return_comment'] = $return_comment;

        return $this;
    }

    /**
     * Gets amazon_return_reason_code
     *
     * @return string|null
     */
    public function getAmazonReturnReasonCode()
    {
        return $this->container['amazon_return_reason_code'];
    }

    /**
     * Sets amazon_return_reason_code
     *
     * @param string|null $amazon_return_reason_code The return reason code that the Amazon fulfillment center assigned to the return item.
     *
     * @return self
     */
    public function setAmazonReturnReasonCode($amazon_return_reason_code) : self
    {
        $this->container['amazon_return_reason_code'] = $amazon_return_reason_code;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentReturnItemStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\FulfillmentReturnItemStatus $status status
     *
     * @return self
     */
    public function setStatus($status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_changed_date
     *
     * @return \DateTimeInterface
     */
    public function getStatusChangedDate()
    {
        return $this->container['status_changed_date'];
    }

    /**
     * Sets status_changed_date
     *
     * @param \DateTimeInterface $status_changed_date status_changed_date
     *
     * @return self
     */
    public function setStatusChangedDate($status_changed_date) : self
    {
        $this->container['status_changed_date'] = $status_changed_date;

        return $this;
    }

    /**
     * Gets return_authorization_id
     *
     * @return string|null
     */
    public function getReturnAuthorizationId()
    {
        return $this->container['return_authorization_id'];
    }

    /**
     * Sets return_authorization_id
     *
     * @param string|null $return_authorization_id Identifies the return authorization used to return this item. Refer to `ReturnAuthorization`.
     *
     * @return self
     */
    public function setReturnAuthorizationId($return_authorization_id) : self
    {
        $this->container['return_authorization_id'] = $return_authorization_id;

        return $this;
    }

    /**
     * Gets return_received_condition
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItemDisposition|null
     */
    public function getReturnReceivedCondition()
    {
        return $this->container['return_received_condition'];
    }

    /**
     * Sets return_received_condition
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentOutbound\ReturnItemDisposition|null $return_received_condition return_received_condition
     *
     * @return self
     */
    public function setReturnReceivedCondition($return_received_condition) : self
    {
        $this->container['return_received_condition'] = $return_received_condition;

        return $this;
    }

    /**
     * Gets fulfillment_center_id
     *
     * @return string|null
     */
    public function getFulfillmentCenterId()
    {
        return $this->container['fulfillment_center_id'];
    }

    /**
     * Sets fulfillment_center_id
     *
     * @param string|null $fulfillment_center_id The identifier for the Amazon fulfillment center that processed the return item.
     *
     * @return self
     */
    public function setFulfillmentCenterId($fulfillment_center_id) : self
    {
        $this->container['fulfillment_center_id'] = $fulfillment_center_id;

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

