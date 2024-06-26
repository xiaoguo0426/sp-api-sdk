<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\MerchantFulfillment;
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
 */
class InputTargetType
{
    /**
     * Possible values of this enum
     */
    const SHIPMENT_LEVEL = 'SHIPMENT_LEVEL';

    const ITEM_LEVEL = 'ITEM_LEVEL';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPMENT_LEVEL,
            self::ITEM_LEVEL
        ];
    }

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function toString(): string
    {
        return $this->value;
    }
}

