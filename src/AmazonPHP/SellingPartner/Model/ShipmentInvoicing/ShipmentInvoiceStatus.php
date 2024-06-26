<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\ShipmentInvoicing;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Shipment Invoicing
*
* The Selling Partner API for Shipment Invoicing helps you programmatically retrieve shipment invoice information in the Brazil marketplace for a selling partner’s Fulfillment by Amazon (FBA) orders.
*
* The version of the OpenAPI document: v0
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class ShipmentInvoiceStatus
{
    /**
     * Possible values of this enum
     */
    const PROCESSING = 'Processing';

    const ACCEPTED = 'Accepted';

    const ERRORED = 'Errored';

    const NOT_FOUND = 'NotFound';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PROCESSING,
            self::ACCEPTED,
            self::ERRORED,
            self::NOT_FOUND
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

