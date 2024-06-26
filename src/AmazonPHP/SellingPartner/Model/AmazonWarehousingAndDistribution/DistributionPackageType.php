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
class DistributionPackageType
{
    /**
     * Possible values of this enum
     */
    const _CASE = 'CASE';

    const PALLET = 'PALLET';

    private string $value;

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_CASE,
            self::PALLET
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

