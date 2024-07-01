<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Merchant Fulfillment
*
* With the Selling Partner API for Merchant Fulfillment, you can build applications that sellers can use to purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
*
* The version of the OpenAPI document: v0
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Item implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'Item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'order_item_id' => 'string',
        'quantity' => 'int',
        'item_weight' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight',
        'item_description' => 'string',
        'transparency_code_list' => 'string[]',
        'item_level_seller_inputs_list' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\AdditionalSellerInputs[]',
        'liquid_volume' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\LiquidVolume',
        'is_hazmat' => 'bool',
        'dangerous_goods_details' => '\AmazonPHP\SellingPartner\Model\MerchantFulfillment\DangerousGoodsDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'order_item_id' => null,
        'quantity' => 'int32',
        'item_weight' => null,
        'item_description' => null,
        'transparency_code_list' => null,
        'item_level_seller_inputs_list' => null,
        'liquid_volume' => null,
        'is_hazmat' => null,
        'dangerous_goods_details' => null
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
        'order_item_id' => 'OrderItemId',
        'quantity' => 'Quantity',
        'item_weight' => 'ItemWeight',
        'item_description' => 'ItemDescription',
        'transparency_code_list' => 'TransparencyCodeList',
        'item_level_seller_inputs_list' => 'ItemLevelSellerInputsList',
        'liquid_volume' => 'LiquidVolume',
        'is_hazmat' => 'IsHazmat',
        'dangerous_goods_details' => 'DangerousGoodsDetails'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'order_item_id' => 'setOrderItemId',
        'quantity' => 'setQuantity',
        'item_weight' => 'setItemWeight',
        'item_description' => 'setItemDescription',
        'transparency_code_list' => 'setTransparencyCodeList',
        'item_level_seller_inputs_list' => 'setItemLevelSellerInputsList',
        'liquid_volume' => 'setLiquidVolume',
        'is_hazmat' => 'setIsHazmat',
        'dangerous_goods_details' => 'setDangerousGoodsDetails'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'order_item_id' => 'getOrderItemId',
        'quantity' => 'getQuantity',
        'item_weight' => 'getItemWeight',
        'item_description' => 'getItemDescription',
        'transparency_code_list' => 'getTransparencyCodeList',
        'item_level_seller_inputs_list' => 'getItemLevelSellerInputsList',
        'liquid_volume' => 'getLiquidVolume',
        'is_hazmat' => 'getIsHazmat',
        'dangerous_goods_details' => 'getDangerousGoodsDetails'
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
        $this->container['order_item_id'] = $data['order_item_id'] ?? null;
        $this->container['quantity'] = $data['quantity'] ?? null;
        $this->container['item_weight'] = $data['item_weight'] ?? null;
        $this->container['item_description'] = $data['item_description'] ?? null;
        $this->container['transparency_code_list'] = $data['transparency_code_list'] ?? null;
        $this->container['item_level_seller_inputs_list'] = $data['item_level_seller_inputs_list'] ?? null;
        $this->container['liquid_volume'] = $data['liquid_volume'] ?? null;
        $this->container['is_hazmat'] = $data['is_hazmat'] ?? null;
        $this->container['dangerous_goods_details'] = $data['dangerous_goods_details'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
        if ($this->container['order_item_id'] === null) {
            throw new AssertionException("'order_item_id' can't be null");
        }

        if ($this->container['quantity'] === null) {
            throw new AssertionException("'quantity' can't be null");
        }

            if ($this->container['item_weight'] !== null) {
            $this->container['item_weight']->validate();
            }

            if ($this->container['liquid_volume'] !== null) {
            $this->container['liquid_volume']->validate();
            }

            if ($this->container['dangerous_goods_details'] !== null) {
            $this->container['dangerous_goods_details']->validate();
            }

    }


    /**
     * Gets order_item_id
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id
     *
     * @param string $order_item_id An Amazon-defined identifier for an individual item in an order.
     *
     * @return self
     */
    public function setOrderItemId($order_item_id) : self
    {
        $this->container['order_item_id'] = $order_item_id;

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
     * @param int $quantity The number of items.
     *
     * @return self
     */
    public function setQuantity($quantity) : self
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets item_weight
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight|null
     */
    public function getItemWeight()
    {
        return $this->container['item_weight'];
    }

    /**
     * Sets item_weight
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\Weight|null $item_weight item_weight
     *
     * @return self
     */
    public function setItemWeight($item_weight) : self
    {
        $this->container['item_weight'] = $item_weight;

        return $this;
    }

    /**
     * Gets item_description
     *
     * @return string|null
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     *
     * @param string|null $item_description The description of the item.
     *
     * @return self
     */
    public function setItemDescription($item_description) : self
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets transparency_code_list
     *
     * @return string[]|null
     */
    public function getTransparencyCodeList()
    {
        return $this->container['transparency_code_list'];
    }

    /**
     * Sets transparency_code_list
     *
     * @param string[]|null $transparency_code_list A list of transparency codes.
     *
     * @return self
     */
    public function setTransparencyCodeList($transparency_code_list) : self
    {
        $this->container['transparency_code_list'] = $transparency_code_list;

        return $this;
    }

    /**
     * Gets item_level_seller_inputs_list
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\AdditionalSellerInputs[]|null
     */
    public function getItemLevelSellerInputsList()
    {
        return $this->container['item_level_seller_inputs_list'];
    }

    /**
     * Sets item_level_seller_inputs_list
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\AdditionalSellerInputs[]|null $item_level_seller_inputs_list A list of additional seller input pairs required to purchase shipping.
     *
     * @return self
     */
    public function setItemLevelSellerInputsList($item_level_seller_inputs_list) : self
    {
        $this->container['item_level_seller_inputs_list'] = $item_level_seller_inputs_list;

        return $this;
    }

    /**
     * Gets liquid_volume
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\LiquidVolume|null
     */
    public function getLiquidVolume()
    {
        return $this->container['liquid_volume'];
    }

    /**
     * Sets liquid_volume
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\LiquidVolume|null $liquid_volume liquid_volume
     *
     * @return self
     */
    public function setLiquidVolume($liquid_volume) : self
    {
        $this->container['liquid_volume'] = $liquid_volume;

        return $this;
    }

    /**
     * Gets is_hazmat
     *
     * @return bool|null
     */
    public function getIsHazmat()
    {
        return $this->container['is_hazmat'];
    }

    /**
     * Sets is_hazmat
     *
     * @param bool|null $is_hazmat When true, the item qualifies as hazardous materials (hazmat). Defaults to false.
     *
     * @return self
     */
    public function setIsHazmat($is_hazmat) : self
    {
        $this->container['is_hazmat'] = $is_hazmat;

        return $this;
    }

    /**
     * Gets dangerous_goods_details
     *
     * @return \AmazonPHP\SellingPartner\Model\MerchantFulfillment\DangerousGoodsDetails|null
     */
    public function getDangerousGoodsDetails()
    {
        return $this->container['dangerous_goods_details'];
    }

    /**
     * Sets dangerous_goods_details
     *
     * @param \AmazonPHP\SellingPartner\Model\MerchantFulfillment\DangerousGoodsDetails|null $dangerous_goods_details dangerous_goods_details
     *
     * @return self
     */
    public function setDangerousGoodsDetails($dangerous_goods_details) : self
    {
        $this->container['dangerous_goods_details'] = $dangerous_goods_details;

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

