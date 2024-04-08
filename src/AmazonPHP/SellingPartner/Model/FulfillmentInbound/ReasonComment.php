<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\FulfillmentInbound;
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
 */
class ReasonComment
{
    /**
     * Possible values of this enum
     */
    const APPOINTMENT_REQUESTED_BY_MISTAKE = 'APPOINTMENT_REQUESTED_BY_MISTAKE';

    const VEHICLE_DELAY = 'VEHICLE_DELAY';

    const SLOT_NOT_SUITABLE = 'SLOT_NOT_SUITABLE';

    const OUTSIDE_CARRIER_BUSINESS_HOURS = 'OUTSIDE_CARRIER_BUSINESS_HOURS';

    const UNFAVOURABLE_EXTERNAL_CONDITIONS = 'UNFAVOURABLE_EXTERNAL_CONDITIONS';

    const PROCUREMENT_DELAY = 'PROCUREMENT_DELAY';

    const SHIPPING_PLAN_CHANGED = 'SHIPPING_PLAN_CHANGED';

    const INCREASED_QUANTITY = 'INCREASED_QUANTITY';

    const OTHER = 'OTHER';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPOINTMENT_REQUESTED_BY_MISTAKE,
            self::VEHICLE_DELAY,
            self::SLOT_NOT_SUITABLE,
            self::OUTSIDE_CARRIER_BUSINESS_HOURS,
            self::UNFAVOURABLE_EXTERNAL_CONDITIONS,
            self::PROCUREMENT_DELAY,
            self::SHIPPING_PLAN_CHANGED,
            self::INCREASED_QUANTITY,
            self::OTHER
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

