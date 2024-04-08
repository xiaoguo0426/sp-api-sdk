<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Fulfillment Inbound
*
* The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
*
* The version of the OpenAPI document: v0
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ShipmentType
{
    /**
     * Possible values of this enum
     */
    const SP = 'SP';

    const LTL = 'LTL';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SP,
            self::LTL
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

