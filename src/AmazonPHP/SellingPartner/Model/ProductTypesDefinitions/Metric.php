<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\ProductTypesDefinitions;
use \AmazonPHP\SellingPartner\ObjectSerializer;
use \AmazonPHP\SellingPartner\ModelInterface;
use \AmazonPHP\SellingPartner\Exception\AssertionException;

/**
* Selling Partner API for Replenishment
*
* The Selling Partner API for Replenishment (Replenishment API) provides programmatic access to replenishment program metrics and offers. These programs provide recurring delivery of any replenishable item at a frequency chosen by the customer.  The Replenishment API is available worldwide wherever Amazon Subscribe & Save is available or is supported. The API is available to vendors and FBA selling partners.
*
* The version of the OpenAPI document: 2022-11-07
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
class Metric
{
    /**
     * Possible values of this enum
     */
    const SHIPPED_SUBSCRIPTION_UNITS = 'SHIPPED_SUBSCRIPTION_UNITS';

    const TOTAL_SUBSCRIPTIONS_REVENUE = 'TOTAL_SUBSCRIPTIONS_REVENUE';

    const ACTIVE_SUBSCRIPTIONS = 'ACTIVE_SUBSCRIPTIONS';

    const NOT_DELIVERED_DUE_TO_OOS = 'NOT_DELIVERED_DUE_TO_OOS';

    const SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REVENUE = 'SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REVENUE';

    const LOST_REVENUE_DUE_TO_OOS = 'LOST_REVENUE_DUE_TO_OOS';

    const SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REORDERS = 'SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REORDERS';

    const COUPONS_REVENUE_PENETRATION = 'COUPONS_REVENUE_PENETRATION';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPPED_SUBSCRIPTION_UNITS,
            self::TOTAL_SUBSCRIPTIONS_REVENUE,
            self::ACTIVE_SUBSCRIPTIONS,
            self::NOT_DELIVERED_DUE_TO_OOS,
            self::SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REVENUE,
            self::LOST_REVENUE_DUE_TO_OOS,
            self::SUBSCRIBER_NON_SUBSCRIBER_AVERAGE_REORDERS,
            self::COUPONS_REVENUE_PENETRATION
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

