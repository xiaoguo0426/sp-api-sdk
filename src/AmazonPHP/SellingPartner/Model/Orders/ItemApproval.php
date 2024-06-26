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
class ItemApproval implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const ACTOR_SELLING_PARTNER = 'SELLING_PARTNER';

    final public const ACTOR_AMAZON = 'AMAZON';

    final public const APPROVAL_ACTION_PROCESS_STATUS_PROCESSING = 'PROCESSING';

    final public const APPROVAL_ACTION_PROCESS_STATUS_SUCCESS = 'SUCCESS';

    final public const APPROVAL_ACTION_PROCESS_STATUS_ERROR = 'ERROR';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemApproval';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'sequence_id' => 'int',
        'timestamp' => 'string',
        'actor' => 'string',
        'approver' => 'string',
        'approval_action' => '\AmazonPHP\SellingPartner\Model\Orders\ItemApprovalAction',
        'approval_action_process_status' => 'string',
        'approval_action_process_status_message' => 'string',
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
        'sequence_id' => null,
        'timestamp' => null,
        'actor' => null,
        'approver' => null,
        'approval_action' => null,
        'approval_action_process_status' => null,
        'approval_action_process_status_message' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'sequence_id' => 'SequenceId',
        'timestamp' => 'Timestamp',
        'actor' => 'Actor',
        'approver' => 'Approver',
        'approval_action' => 'ApprovalAction',
        'approval_action_process_status' => 'ApprovalActionProcessStatus',
        'approval_action_process_status_message' => 'ApprovalActionProcessStatusMessage',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'sequence_id' => 'setSequenceId',
        'timestamp' => 'setTimestamp',
        'actor' => 'setActor',
        'approver' => 'setApprover',
        'approval_action' => 'setApprovalAction',
        'approval_action_process_status' => 'setApprovalActionProcessStatus',
        'approval_action_process_status_message' => 'setApprovalActionProcessStatusMessage',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'sequence_id' => 'getSequenceId',
        'timestamp' => 'getTimestamp',
        'actor' => 'getActor',
        'approver' => 'getApprover',
        'approval_action' => 'getApprovalAction',
        'approval_action_process_status' => 'getApprovalActionProcessStatus',
        'approval_action_process_status_message' => 'getApprovalActionProcessStatusMessage',
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
        $this->container['sequence_id'] = $data['sequence_id'] ?? null;
        $this->container['timestamp'] = $data['timestamp'] ?? null;
        $this->container['actor'] = $data['actor'] ?? null;
        $this->container['approver'] = $data['approver'] ?? null;
        $this->container['approval_action'] = $data['approval_action'] ?? null;
        $this->container['approval_action_process_status'] = $data['approval_action_process_status'] ?? null;
        $this->container['approval_action_process_status_message'] = $data['approval_action_process_status_message'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getActorAllowableValues() : array
    {
        return [
            self::ACTOR_SELLING_PARTNER,
            self::ACTOR_AMAZON,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getApprovalActionProcessStatusAllowableValues() : array
    {
        return [
            self::APPROVAL_ACTION_PROCESS_STATUS_PROCESSING,
            self::APPROVAL_ACTION_PROCESS_STATUS_SUCCESS,
            self::APPROVAL_ACTION_PROCESS_STATUS_ERROR,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['sequence_id'] === null) {
            throw new AssertionException("'sequence_id' can't be null");
        }

        if ($this->container['timestamp'] === null) {
            throw new AssertionException("'timestamp' can't be null");
        }

        if ($this->container['actor'] === null) {
            throw new AssertionException("'actor' can't be null");
        }

        $allowedValues = $this->getActorAllowableValues();

        if (null !== $this->container['actor'] && !\in_array($this->container['actor'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'actor', must be one of '%s'",
                    $this->container['actor'],
                    \implode("', '", $allowedValues)
                )
            );
        }

        if ($this->container['approval_action'] === null) {
            throw new AssertionException("'approval_action' can't be null");
        }

        $this->container['approval_action']->validate();

        if ($this->container['approval_action_process_status'] === null) {
            throw new AssertionException("'approval_action_process_status' can't be null");
        }

        $allowedValues = $this->getApprovalActionProcessStatusAllowableValues();

        if (null !== $this->container['approval_action_process_status'] && !\in_array($this->container['approval_action_process_status'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'approval_action_process_status', must be one of '%s'",
                    $this->container['approval_action_process_status'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets sequence_id.
     */
    public function getSequenceId() : int
    {
        return $this->container['sequence_id'];
    }

    /**
     * Sets sequence_id.
     *
     * @param int $sequence_id Sequence number of the item approval. Each ItemApproval gets its sequenceId automatically from a monotonic increasing function.
     */
    public function setSequenceId(int $sequence_id) : self
    {
        $this->container['sequence_id'] = $sequence_id;

        return $this;
    }

    /**
     * Gets timestamp.
     */
    public function getTimestamp() : string
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp.
     *
     * @param string $timestamp Timestamp when the ItemApproval was recorded by Amazon's internal order approvals system. In ISO 8601 date time format.
     */
    public function setTimestamp(string $timestamp) : self
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets actor.
     */
    public function getActor() : string
    {
        return $this->container['actor'];
    }

    /**
     * Sets actor.
     *
     * @param string $actor high level actors involved in the approval process
     */
    public function setActor(string $actor) : self
    {
        $this->container['actor'] = $actor;

        return $this;
    }

    /**
     * Gets approver.
     */
    public function getApprover() : ?string
    {
        return $this->container['approver'];
    }

    /**
     * Sets approver.
     *
     * @param null|string $approver person or system that triggers the approval actions on behalf of the actor
     */
    public function setApprover(?string $approver) : self
    {
        $this->container['approver'] = $approver;

        return $this;
    }

    /**
     * Gets approval_action.
     */
    public function getApprovalAction() : ItemApprovalAction
    {
        return $this->container['approval_action'];
    }

    /**
     * Sets approval_action.
     *
     * @param \AmazonPHP\SellingPartner\Model\Orders\ItemApprovalAction $approval_action approval_action
     */
    public function setApprovalAction(ItemApprovalAction $approval_action) : self
    {
        $this->container['approval_action'] = $approval_action;

        return $this;
    }

    /**
     * Gets approval_action_process_status.
     */
    public function getApprovalActionProcessStatus() : string
    {
        return $this->container['approval_action_process_status'];
    }

    /**
     * Sets approval_action_process_status.
     *
     * @param string $approval_action_process_status status of approval action
     */
    public function setApprovalActionProcessStatus(string $approval_action_process_status) : self
    {
        $this->container['approval_action_process_status'] = $approval_action_process_status;

        return $this;
    }

    /**
     * Gets approval_action_process_status_message.
     */
    public function getApprovalActionProcessStatusMessage() : ?string
    {
        return $this->container['approval_action_process_status_message'];
    }

    /**
     * Sets approval_action_process_status_message.
     *
     * @param null|string $approval_action_process_status_message optional message to communicate optional additional context about the current status of the approval action
     */
    public function setApprovalActionProcessStatusMessage(?string $approval_action_process_status_message) : self
    {
        $this->container['approval_action_process_status_message'] = $approval_action_process_status_message;

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
