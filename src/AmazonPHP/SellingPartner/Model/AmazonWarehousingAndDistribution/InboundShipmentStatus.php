<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\AmazonWarehousingAndDistribution;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* The Selling Partner API for AWD
*
* The Selling Partner API for Amazon Warehousing and Distribution (AWD).
*
* The version of the OpenAPI document: 2024-05-09
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class InboundShipmentStatus
{
    /**
     * Possible values of this enum
     */
    const CREATED = 'CREATED';

    const SHIPPED = 'SHIPPED';

    const IN_TRANSIT = 'IN_TRANSIT';

    const RECEIVING = 'RECEIVING';

    const DELIVERED = 'DELIVERED';

    const CLOSED = 'CLOSED';

    const CANCELLED = 'CANCELLED';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::SHIPPED,
            self::IN_TRANSIT,
            self::RECEIVING,
            self::DELIVERED,
            self::CLOSED,
            self::CANCELLED
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
