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
class Shipment implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'amazon_reference_id' => 'string',
        'contact_information' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ContactInformation',
        'dates' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dates',
        'destination' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentDestination',
        'freight_information' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\FreightInformation',
        'name' => 'string',
        'placement_option_id' => 'string',
        'selected_delivery_window' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelectedDeliveryWindow',
        'selected_transportation_option_id' => 'string',
        'self_ship_appointment_details' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelfShipAppointmentDetails[]',
        'shipment_confirmation_id' => 'string',
        'shipment_id' => 'string',
        'source' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentSource',
        'status' => 'string',
        'tracking_details' => '\AmazonPHP\SellingPartner\Model\FulfillmentInbound\TrackingDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'amazon_reference_id' => null,
        'contact_information' => null,
        'dates' => null,
        'destination' => null,
        'freight_information' => null,
        'name' => null,
        'placement_option_id' => null,
        'selected_delivery_window' => null,
        'selected_transportation_option_id' => null,
        'self_ship_appointment_details' => null,
        'shipment_confirmation_id' => null,
        'shipment_id' => null,
        'source' => null,
        'status' => null,
        'tracking_details' => null
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
        'amazon_reference_id' => 'amazonReferenceId',
        'contact_information' => 'contactInformation',
        'dates' => 'dates',
        'destination' => 'destination',
        'freight_information' => 'freightInformation',
        'name' => 'name',
        'placement_option_id' => 'placementOptionId',
        'selected_delivery_window' => 'selectedDeliveryWindow',
        'selected_transportation_option_id' => 'selectedTransportationOptionId',
        'self_ship_appointment_details' => 'selfShipAppointmentDetails',
        'shipment_confirmation_id' => 'shipmentConfirmationId',
        'shipment_id' => 'shipmentId',
        'source' => 'source',
        'status' => 'status',
        'tracking_details' => 'trackingDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_reference_id' => 'setAmazonReferenceId',
        'contact_information' => 'setContactInformation',
        'dates' => 'setDates',
        'destination' => 'setDestination',
        'freight_information' => 'setFreightInformation',
        'name' => 'setName',
        'placement_option_id' => 'setPlacementOptionId',
        'selected_delivery_window' => 'setSelectedDeliveryWindow',
        'selected_transportation_option_id' => 'setSelectedTransportationOptionId',
        'self_ship_appointment_details' => 'setSelfShipAppointmentDetails',
        'shipment_confirmation_id' => 'setShipmentConfirmationId',
        'shipment_id' => 'setShipmentId',
        'source' => 'setSource',
        'status' => 'setStatus',
        'tracking_details' => 'setTrackingDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_reference_id' => 'getAmazonReferenceId',
        'contact_information' => 'getContactInformation',
        'dates' => 'getDates',
        'destination' => 'getDestination',
        'freight_information' => 'getFreightInformation',
        'name' => 'getName',
        'placement_option_id' => 'getPlacementOptionId',
        'selected_delivery_window' => 'getSelectedDeliveryWindow',
        'selected_transportation_option_id' => 'getSelectedTransportationOptionId',
        'self_ship_appointment_details' => 'getSelfShipAppointmentDetails',
        'shipment_confirmation_id' => 'getShipmentConfirmationId',
        'shipment_id' => 'getShipmentId',
        'source' => 'getSource',
        'status' => 'getStatus',
        'tracking_details' => 'getTrackingDetails'
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
        $this->container['amazon_reference_id'] = $data['amazon_reference_id'] ?? null;
        $this->container['contact_information'] = $data['contact_information'] ?? null;
        $this->container['dates'] = $data['dates'] ?? null;
        $this->container['destination'] = $data['destination'] ?? null;
        $this->container['freight_information'] = $data['freight_information'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['placement_option_id'] = $data['placement_option_id'] ?? null;
        $this->container['selected_delivery_window'] = $data['selected_delivery_window'] ?? null;
        $this->container['selected_transportation_option_id'] = $data['selected_transportation_option_id'] ?? null;
        $this->container['self_ship_appointment_details'] = $data['self_ship_appointment_details'] ?? null;
        $this->container['shipment_confirmation_id'] = $data['shipment_confirmation_id'] ?? null;
        $this->container['shipment_id'] = $data['shipment_id'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['tracking_details'] = $data['tracking_details'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if (!is_null($this->container['amazon_reference_id']) && (mb_strlen($this->container['amazon_reference_id']) > 1024)) {
            throw new AssertionException("invalid value for 'amazon_reference_id', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['amazon_reference_id']) && (mb_strlen($this->container['amazon_reference_id']) < 1)) {
            throw new AssertionException("invalid value for 'amazon_reference_id', the character length must be bigger than or equal to 1.");
        }

            if ($this->container['contact_information'] !== null) {
            $this->container['contact_information']->validate();
            }

            if ($this->container['dates'] !== null) {
            $this->container['dates']->validate();
            }

        if ($this->container['destination'] === null) {
            throw new AssertionException("'destination' can't be null");
        }

            $this->container['destination']->validate();

            if ($this->container['freight_information'] !== null) {
            $this->container['freight_information']->validate();
            }

        if ($this->container['placement_option_id'] === null) {
            throw new AssertionException("'placement_option_id' can't be null");
        }

        if ((mb_strlen($this->container['placement_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'placement_option_id', the character length must be smaller than or equal to 38.");
        }

        if ((mb_strlen($this->container['placement_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'placement_option_id', the character length must be bigger than or equal to 38.");
        }

        if (!preg_match("/^[a-zA-Z0-9-]*$/", $this->container['placement_option_id'])) {
            throw new AssertionException("invalid value for 'placement_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

            if ($this->container['selected_delivery_window'] !== null) {
            $this->container['selected_delivery_window']->validate();
            }

        if (!is_null($this->container['selected_transportation_option_id']) && (mb_strlen($this->container['selected_transportation_option_id']) > 38)) {
            throw new AssertionException("invalid value for 'selected_transportation_option_id', the character length must be smaller than or equal to 38.");
        }

        if (!is_null($this->container['selected_transportation_option_id']) && (mb_strlen($this->container['selected_transportation_option_id']) < 38)) {
            throw new AssertionException("invalid value for 'selected_transportation_option_id', the character length must be bigger than or equal to 38.");
        }

        if (!is_null($this->container['selected_transportation_option_id']) && !preg_match("/^[a-zA-Z0-9-]*$/", $this->container['selected_transportation_option_id'])) {
            throw new AssertionException("invalid value for 'selected_transportation_option_id', must be conform to the pattern /^[a-zA-Z0-9-]*$/.");
        }

        if (!is_null($this->container['shipment_confirmation_id']) && (mb_strlen($this->container['shipment_confirmation_id']) > 1024)) {
            throw new AssertionException("invalid value for 'shipment_confirmation_id', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['shipment_confirmation_id']) && (mb_strlen($this->container['shipment_confirmation_id']) < 1)) {
            throw new AssertionException("invalid value for 'shipment_confirmation_id', the character length must be bigger than or equal to 1.");
        }

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

        if ($this->container['source'] === null) {
            throw new AssertionException("'source' can't be null");
        }

            $this->container['source']->validate();

        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) > 1024)) {
            throw new AssertionException("invalid value for 'status', the character length must be smaller than or equal to 1024.");
        }

        if (!is_null($this->container['status']) && (mb_strlen($this->container['status']) < 1)) {
            throw new AssertionException("invalid value for 'status', the character length must be bigger than or equal to 1.");
        }

            if ($this->container['tracking_details'] !== null) {
            $this->container['tracking_details']->validate();
            }

    }


    /**
     * Gets amazon_reference_id
     *
     * @return string|null
     */
    public function getAmazonReferenceId()
    {
        return $this->container['amazon_reference_id'];
    }

    /**
     * Sets amazon_reference_id
     *
     * @param string|null $amazon_reference_id A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment.
     *
     * @return self
     */
    public function setAmazonReferenceId($amazon_reference_id) : self
    {
        $this->container['amazon_reference_id'] = $amazon_reference_id;

        return $this;
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
     * Gets dates
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dates|null
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Dates|null $dates dates
     *
     * @return self
     */
    public function setDates($dates) : self
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets destination
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentDestination
     */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
     * Sets destination
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentDestination $destination destination
     *
     * @return self
     */
    public function setDestination($destination) : self
    {
        $this->container['destination'] = $destination;

        return $this;
    }

    /**
     * Gets freight_information
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\FreightInformation|null
     */
    public function getFreightInformation()
    {
        return $this->container['freight_information'];
    }

    /**
     * Sets freight_information
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\FreightInformation|null $freight_information freight_information
     *
     * @return self
     */
    public function setFreightInformation($freight_information) : self
    {
        $this->container['freight_information'] = $freight_information;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The name of the shipment.
     *
     * @return self
     */
    public function setName($name) : self
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets placement_option_id
     *
     * @return string
     */
    public function getPlacementOptionId()
    {
        return $this->container['placement_option_id'];
    }

    /**
     * Sets placement_option_id
     *
     * @param string $placement_option_id The identifier of a placement option. A placement option represents the shipment splits and destinations of SKUs.
     *
     * @return self
     */
    public function setPlacementOptionId($placement_option_id) : self
    {
        $this->container['placement_option_id'] = $placement_option_id;

        return $this;
    }

    /**
     * Gets selected_delivery_window
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelectedDeliveryWindow|null
     */
    public function getSelectedDeliveryWindow()
    {
        return $this->container['selected_delivery_window'];
    }

    /**
     * Sets selected_delivery_window
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelectedDeliveryWindow|null $selected_delivery_window selected_delivery_window
     *
     * @return self
     */
    public function setSelectedDeliveryWindow($selected_delivery_window) : self
    {
        $this->container['selected_delivery_window'] = $selected_delivery_window;

        return $this;
    }

    /**
     * Gets selected_transportation_option_id
     *
     * @return string|null
     */
    public function getSelectedTransportationOptionId()
    {
        return $this->container['selected_transportation_option_id'];
    }

    /**
     * Sets selected_transportation_option_id
     *
     * @param string|null $selected_transportation_option_id Identifier of a transportation option. A transportation option represent one option for how to send a shipment.
     *
     * @return self
     */
    public function setSelectedTransportationOptionId($selected_transportation_option_id) : self
    {
        $this->container['selected_transportation_option_id'] = $selected_transportation_option_id;

        return $this;
    }

    /**
     * Gets self_ship_appointment_details
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelfShipAppointmentDetails[]|null
     */
    public function getSelfShipAppointmentDetails()
    {
        return $this->container['self_ship_appointment_details'];
    }

    /**
     * Sets self_ship_appointment_details
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\SelfShipAppointmentDetails[]|null $self_ship_appointment_details List of self ship appointment details.
     *
     * @return self
     */
    public function setSelfShipAppointmentDetails($self_ship_appointment_details) : self
    {
        $this->container['self_ship_appointment_details'] = $self_ship_appointment_details;

        return $this;
    }

    /**
     * Gets shipment_confirmation_id
     *
     * @return string|null
     */
    public function getShipmentConfirmationId()
    {
        return $this->container['shipment_confirmation_id'];
    }

    /**
     * Sets shipment_confirmation_id
     *
     * @param string|null $shipment_confirmation_id The confirmed shipment ID which shows up on labels (for example, `FBA1234ABCD`).
     *
     * @return self
     */
    public function setShipmentConfirmationId($shipment_confirmation_id) : self
    {
        $this->container['shipment_confirmation_id'] = $shipment_confirmation_id;

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
     * @param string $shipment_id Identifier of a shipment. A shipment contains the boxes and units being inbounded.
     *
     * @return self
     */
    public function setShipmentId($shipment_id) : self
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets source
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentSource
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ShipmentSource $source source
     *
     * @return self
     */
    public function setSource($source) : self
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status The status of a shipment. The state of the shipment will typically start in `WORKING` and transition to `READY_TO_SHIP` once required actions are complete prior to being picked up or shipped out. Can be `ABANDONED`, `CANCELLED`, `CHECKED_IN`, `CLOSED`, `DELETED`, `DELIVERED`, `IN_TRANSIT`, `MIXED`, `READY_TO_SHIP`, `RECEIVING`, `SHIPPED`, or `WORKING`.
     *
     * @return self
     */
    public function setStatus($status) : self
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tracking_details
     *
     * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\TrackingDetails|null
     */
    public function getTrackingDetails()
    {
        return $this->container['tracking_details'];
    }

    /**
     * Sets tracking_details
     *
     * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\TrackingDetails|null $tracking_details tracking_details
     *
     * @return self
     */
    public function setTrackingDetails($tracking_details) : self
    {
        $this->container['tracking_details'] = $tracking_details;

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

