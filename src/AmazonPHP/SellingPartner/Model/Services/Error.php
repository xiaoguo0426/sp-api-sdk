<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Model\Services;

use AmazonPHP\SellingPartner\Exception\AssertionException;
use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders and manage their resources.
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
class Error implements \ArrayAccess, \JsonSerializable, \Stringable, ModelInterface
{
    final public const DISCRIMINATOR = null;

    final public const ERROR_LEVEL_ERROR = 'ERROR';

    final public const ERROR_LEVEL_WARNING = 'WARNING';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'Error';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'code' => 'string',
        'message' => 'string',
        'details' => 'string',
        'error_level' => 'string',
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
        'code' => null,
        'message' => null,
        'details' => null,
        'error_level' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'code' => 'code',
        'message' => 'message',
        'details' => 'details',
        'error_level' => 'errorLevel',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'code' => 'setCode',
        'message' => 'setMessage',
        'details' => 'setDetails',
        'error_level' => 'setErrorLevel',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'code' => 'getCode',
        'message' => 'getMessage',
        'details' => 'getDetails',
        'error_level' => 'getErrorLevel',
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
        $this->container['code'] = $data['code'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['details'] = $data['details'] ?? null;
        $this->container['error_level'] = $data['error_level'] ?? null;
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
    public function getErrorLevelAllowableValues() : array
    {
        return [
            self::ERROR_LEVEL_ERROR,
            self::ERROR_LEVEL_WARNING,
        ];
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['code'] === null) {
            throw new AssertionException("'code' can't be null");
        }

        if ($this->container['message'] === null) {
            throw new AssertionException("'message' can't be null");
        }

        $allowedValues = $this->getErrorLevelAllowableValues();

        if (null !== $this->container['error_level'] && !\in_array($this->container['error_level'], $allowedValues, true)) {
            throw new AssertionException(
                \sprintf(
                    "invalid value '%s' for 'error_level', must be one of '%s'",
                    $this->container['error_level'],
                    \implode("', '", $allowedValues)
                )
            );
        }
    }

    /**
     * Gets code.
     *
     * @return string
     */
    public function getCode() : string
    {
        return $this->container['code'];
    }

    /**
     * Sets code.
     *
     * @param string $code an error code that identifies the type of error that occurred
     */
    public function setCode(string $code) : self
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets message.
     *
     * @return string
     */
    public function getMessage() : string
    {
        return $this->container['message'];
    }

    /**
     * Sets message.
     *
     * @param string $message a message that describes the error condition in a human-readable form
     */
    public function setMessage(string $message) : self
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets details.
     *
     * @return null|string
     */
    public function getDetails() : ?string
    {
        return $this->container['details'];
    }

    /**
     * Sets details.
     *
     * @param null|string $details additional details that can help the caller understand or fix the issue
     */
    public function setDetails(?string $details) : self
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets error_level.
     *
     * @return null|string
     */
    public function getErrorLevel() : ?string
    {
        return $this->container['error_level'];
    }

    /**
     * Sets error_level.
     *
     * @param null|string $error_level the type of error
     */
    public function setErrorLevel(?string $error_level) : self
    {
        $this->container['error_level'] = $error_level;

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
