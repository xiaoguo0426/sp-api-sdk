<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Finances;

use \ArrayAccess;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Finances
*
* The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
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
class AffordabilityExpenseEvent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'AffordabilityExpenseEvent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static array $openAPITypes = [
        'amazon_order_id' => 'string',
        'posted_date' => '\DateTimeInterface',
        'marketplace_id' => 'string',
        'transaction_type' => 'string',
        'base_expense' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_type_cgst' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_type_sgst' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'tax_type_igst' => '\AmazonPHP\SellingPartner\Model\Finances\Currency',
        'total_expense' => '\AmazonPHP\SellingPartner\Model\Finances\Currency'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'amazon_order_id' => null,
        'posted_date' => 'date-time',
        'marketplace_id' => null,
        'transaction_type' => null,
        'base_expense' => null,
        'tax_type_cgst' => null,
        'tax_type_sgst' => null,
        'tax_type_igst' => null,
        'total_expense' => null
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
        'amazon_order_id' => 'AmazonOrderId',
        'posted_date' => 'PostedDate',
        'marketplace_id' => 'MarketplaceId',
        'transaction_type' => 'TransactionType',
        'base_expense' => 'BaseExpense',
        'tax_type_cgst' => 'TaxTypeCGST',
        'tax_type_sgst' => 'TaxTypeSGST',
        'tax_type_igst' => 'TaxTypeIGST',
        'total_expense' => 'TotalExpense'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static array $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'posted_date' => 'setPostedDate',
        'marketplace_id' => 'setMarketplaceId',
        'transaction_type' => 'setTransactionType',
        'base_expense' => 'setBaseExpense',
        'tax_type_cgst' => 'setTaxTypeCgst',
        'tax_type_sgst' => 'setTaxTypeSgst',
        'tax_type_igst' => 'setTaxTypeIgst',
        'total_expense' => 'setTotalExpense'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static array $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'posted_date' => 'getPostedDate',
        'marketplace_id' => 'getMarketplaceId',
        'transaction_type' => 'getTransactionType',
        'base_expense' => 'getBaseExpense',
        'tax_type_cgst' => 'getTaxTypeCgst',
        'tax_type_sgst' => 'getTaxTypeSgst',
        'tax_type_igst' => 'getTaxTypeIgst',
        'total_expense' => 'getTotalExpense'
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['posted_date'] = $data['posted_date'] ?? null;
        $this->container['marketplace_id'] = $data['marketplace_id'] ?? null;
        $this->container['transaction_type'] = $data['transaction_type'] ?? null;
        $this->container['base_expense'] = $data['base_expense'] ?? null;
        $this->container['tax_type_cgst'] = $data['tax_type_cgst'] ?? null;
        $this->container['tax_type_sgst'] = $data['tax_type_sgst'] ?? null;
        $this->container['tax_type_igst'] = $data['tax_type_igst'] ?? null;
        $this->container['total_expense'] = $data['total_expense'] ?? null;
    }

    /**
     * Validate all properties.
     *
     * @throws AssertionException
     */
    public function validate() : void
    {
            if ($this->container['base_expense'] !== null) {
            $this->container['base_expense']->validate();
            }

        if ($this->container['tax_type_cgst'] === null) {
            throw new AssertionException("'tax_type_cgst' can't be null");
        }

            $this->container['tax_type_cgst']->validate();

        if ($this->container['tax_type_sgst'] === null) {
            throw new AssertionException("'tax_type_sgst' can't be null");
        }

            $this->container['tax_type_sgst']->validate();

        if ($this->container['tax_type_igst'] === null) {
            throw new AssertionException("'tax_type_igst' can't be null");
        }

            $this->container['tax_type_igst']->validate();

            if ($this->container['total_expense'] !== null) {
            $this->container['total_expense']->validate();
            }

    }


    /**
     * Gets amazon_order_id
     *
     * @return string|null
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string|null $amazon_order_id An Amazon-defined identifier for an order.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id) : self
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets posted_date
     *
     * @return \DateTimeInterface|null
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date
     *
     * @param \DateTimeInterface|null $posted_date posted_date
     *
     * @return self
     */
    public function setPostedDate($posted_date) : self
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets marketplace_id
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id
     *
     * @param string|null $marketplace_id An encrypted, Amazon-defined marketplace identifier.
     *
     * @return self
     */
    public function setMarketplaceId($marketplace_id) : self
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string|null $transaction_type Indicates the type of transaction.   Possible values:  * Charge - For an affordability promotion expense.  * Refund - For an affordability promotion expense reversal.
     *
     * @return self
     */
    public function setTransactionType($transaction_type) : self
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets base_expense
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency|null
     */
    public function getBaseExpense()
    {
        return $this->container['base_expense'];
    }

    /**
     * Sets base_expense
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency|null $base_expense base_expense
     *
     * @return self
     */
    public function setBaseExpense($base_expense) : self
    {
        $this->container['base_expense'] = $base_expense;

        return $this;
    }

    /**
     * Gets tax_type_cgst
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTaxTypeCgst()
    {
        return $this->container['tax_type_cgst'];
    }

    /**
     * Sets tax_type_cgst
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency $tax_type_cgst tax_type_cgst
     *
     * @return self
     */
    public function setTaxTypeCgst($tax_type_cgst) : self
    {
        $this->container['tax_type_cgst'] = $tax_type_cgst;

        return $this;
    }

    /**
     * Gets tax_type_sgst
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTaxTypeSgst()
    {
        return $this->container['tax_type_sgst'];
    }

    /**
     * Sets tax_type_sgst
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency $tax_type_sgst tax_type_sgst
     *
     * @return self
     */
    public function setTaxTypeSgst($tax_type_sgst) : self
    {
        $this->container['tax_type_sgst'] = $tax_type_sgst;

        return $this;
    }

    /**
     * Gets tax_type_igst
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency
     */
    public function getTaxTypeIgst()
    {
        return $this->container['tax_type_igst'];
    }

    /**
     * Sets tax_type_igst
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency $tax_type_igst tax_type_igst
     *
     * @return self
     */
    public function setTaxTypeIgst($tax_type_igst) : self
    {
        $this->container['tax_type_igst'] = $tax_type_igst;

        return $this;
    }

    /**
     * Gets total_expense
     *
     * @return \AmazonPHP\SellingPartner\Model\Finances\Currency|null
     */
    public function getTotalExpense()
    {
        return $this->container['total_expense'];
    }

    /**
     * Sets total_expense
     *
     * @param \AmazonPHP\SellingPartner\Model\Finances\Currency|null $total_expense total_expense
     *
     * @return self
     */
    public function setTotalExpense($total_expense) : self
    {
        $this->container['total_expense'] = $total_expense;

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

