<?php

namespace AmazonPHP\SellingPartner\Api\QueriesApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

/**
* Selling Partner API for Data Kiosk
*
* The Selling Partner API for Data Kiosk lets you submit GraphQL queries from a variety of schemas to help selling partners manage their businesses.
*
* The version of the OpenAPI document: 2023-11-15
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
*/
interface DataKioskSDKInterface
{
    public const API_NAME = 'DataKiosk';

    public const OPERATION_CANCELQUERY = 'cancelQuery';

    public const OPERATION_CANCELQUERY_PATH = '/dataKiosk/2023-11-15/queries/{queryId}';
    public const OPERATION_CREATEQUERY = 'createQuery';

    public const OPERATION_CREATEQUERY_PATH = '/dataKiosk/2023-11-15/queries';
    public const OPERATION_GETDOCUMENT = 'getDocument';

    public const OPERATION_GETDOCUMENT_PATH = '/dataKiosk/2023-11-15/documents/{documentId}';
    public const OPERATION_GETQUERIES = 'getQueries';

    public const OPERATION_GETQUERIES_PATH = '/dataKiosk/2023-11-15/queries';
    public const OPERATION_GETQUERY = 'getQuery';

    public const OPERATION_GETQUERY_PATH = '/dataKiosk/2023-11-15/queries/{queryId}';

    /**
    * Operation cancelQuery
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $query_id  The identifier for the query. This identifier is unique only in combination with a selling partner account ID. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return null
    */
    public function cancelQuery(AccessToken $accessToken, string $region, $query_id);
    /**
    * Operation createQuery
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param \AmazonPHP\SellingPartner\Model\DataKiosk\CreateQuerySpecification $body  The body of the request. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\DataKiosk\CreateQueryResponse
    */
    public function createQuery(AccessToken $accessToken, string $region, $body);
    /**
    * Operation getDocument
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $document_id  The identifier for the Data Kiosk document. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\DataKiosk\GetDocumentResponse
    */
    public function getDocument(AccessToken $accessToken, string $region, $document_id);
    /**
    * Operation getQueries
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string[]|null $processing_statuses  A list of processing statuses used to filter queries. (optional)
    * @param int $page_size  The maximum number of queries to return in a single call. (optional, default to 10)
    * @param \DateTimeInterface|null $created_since  The earliest query creation date and time for queries to include in the response, in ISO 8601 date time format. The default is 90 days ago. (optional)
    * @param \DateTimeInterface|null $created_until  The latest query creation date and time for queries to include in the response, in ISO 8601 date time format. The default is the time of the &#x60;getQueries&#x60; request. (optional)
    * @param string|null $pagination_token  A token to fetch a certain page of results when there are multiple pages of results available. The value of this token is fetched from the &#x60;pagination.nextToken&#x60; field returned in the &#x60;GetQueriesResponse&#x60; object. All other parameters must be provided with the same values that were provided with the request that generated this token, with the exception of &#x60;pageSize&#x60; which can be modified between calls to &#x60;getQueries&#x60;. In the absence of this token value, &#x60;getQueries&#x60; returns the first page of results. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\DataKiosk\GetQueriesResponse
    */
    public function getQueries(AccessToken $accessToken, string $region, $processing_statuses = null, $page_size = 10, $created_since = null, $created_until = null, $pagination_token = null);
    /**
    * Operation getQuery
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $query_id  The query identifier. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\DataKiosk\Query
    */
    public function getQuery(AccessToken $accessToken, string $region, $query_id);
}