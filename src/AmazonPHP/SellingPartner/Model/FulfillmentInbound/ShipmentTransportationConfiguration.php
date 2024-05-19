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
class ShipmentTransportationConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ShipmentTransportationConfiguration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'contact_information' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ContactInformation',
        'pallet_information' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\PalletInformation',
        'ready_to_ship_window' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\WindowInput',
        'shipment_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'contact_information' => null,
        'pallet_information' => null,
        'ready_to_ship_window' => null,
        'shipment_id' => null
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
        'contact_information' => 'contactInformation',
        'pallet_information' => 'palletInformation',
        'ready_to_ship_window' => 'readyToShipWindow',
        'shipment_id' => 'shipmentId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'contact_information' => 'setContactInformation',
        'pallet_information' => 'setPalletInformation',
        'ready_to_ship_window' => 'setReadyToShipWindow',
        'shipment_id' => 'setShipmentId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'contact_information' => 'getContactInformation',
        'pallet_information' => 'getPalletInformation',
        'ready_to_ship_window' => 'getReadyToShipWindow',
        'shipment_id' => 'getShipmentId'
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
        $this->container['contact_information'] = $data['contact_information'] ?? null;
        $this->container['pallet_information'] = $data['pallet_information'] ?? null;
        $this->container['ready_to_ship_window'] = $data['ready_to_ship_window'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['contact_information'] !== null) {
            $this->container['contact_information']->validate();
            }

            if ($this->container['pallet_information'] !== null) {
            $this->container['pallet_information']->validate();
            }

        if ($this->container['ready_to_ship_window'] === null) {
            throw new AssertionException("'ready_to_ship_window' can't be null");
        }

            $this->container['ready_to_ship_window']->validate();

        if ($this->container['shipment_id'] === null) {
            throw new AssertionException("'shipment_id' can't be null");
        }

        if ((mb_strlen($this->container['shipment_id']) > 38)) {
            throw new AssertionException("invalid value for 'shipment_id', the character length must be smaller than or equal to 38.");
        }

        if ((mb_strlen($this->container['shipment_id']) < 38)) {
            throw new AssertionException("invalid value for 'shipment_id', the character length must be bigger than or equal to 38.");
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['shipment_id'])) {
            throw new AssertionException("invalid value for 'shipment_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

    }


    /**
     * Gets contact_information
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ContactInformation|null
     */
    public function getContactInformation()
    {
        return $this->container['contact_information'];
    }

    /**
     * Sets contact_information
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ContactInformation|null $contact_information contact_information
     *
     * @return self
     */
    public function setContactInformation($contact_information) : self
    {
        $this->container['contact_information'] = $contact_information;

        return $this;
    }

    /**
     * Gets pallet_information
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\PalletInformation|null
     */
    public function getPalletInformation()
    {
        return $this->container['pallet_information'];
    }

    /**
     * Sets pallet_information
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\PalletInformation|null $pallet_information pallet_information
     *
     * @return self
     */
    public function setPalletInformation($pallet_information) : self
    {
        $this->container['pallet_information'] = $pallet_information;

        return $this;
    }

    /**
     * Gets ready_to_ship_window
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\WindowInput
     */
    public function getReadyToShipWindow()
    {
        return $this->container['ready_to_ship_window'];
    }

    /**
     * Sets ready_to_ship_window
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\WindowInput $ready_to_ship_window ready_to_ship_window
     *
     * @return self
     */
    public function setReadyToShipWindow($ready_to_ship_window) : self
    {
        $this->container['ready_to_ship_window'] = $ready_to_ship_window;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param string $shipment_id Identifier to a shipment. A shipment contains the boxes and units being inbounded.
     *
     * @return self
     */
    public function setShipmentId($shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

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
