<?php

namespace AmazonPHP\SellingPartner\Api\SellingpartnersApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

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
interface ProductTypesDefinitionsSDKInterface
{
    public const API_NAME = 'ProductTypesDefinitions';

    public const OPERATION_GETSELLINGPARTNERMETRICS = 'getSellingPartnerMetrics';

    public const OPERATION_GETSELLINGPARTNERMETRICS_PATH = '/replenishment/2022-11-07/sellingPartners/metrics/search';

    /**
    * Operation getSellingPartnerMetrics
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\GetSellingPartnerMetricsRequest|null $body  The request body for the &#x60;getSellingPartnerMetrics&#x60; operation. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\GetSellingPartnerMetricsResponse
    */
    public function getSellingPartnerMetrics(AccessToken $accessToken, string $region, $body = null);
}
