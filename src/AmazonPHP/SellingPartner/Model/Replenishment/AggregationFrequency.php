<?php

declare(strict_types=1);


namespace AmazonPHP\SellingPartner\Model\Replenishment;
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
class AggregationFrequency
{
    /**
     * Possible values of this enum
     */
    const WEEK = 'WEEK';

    const MONTH = 'MONTH';

    const QUARTER = 'QUARTER';

    const YEAR = 'YEAR';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WEEK,
            self::MONTH,
            self::QUARTER,
            self::YEAR
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

