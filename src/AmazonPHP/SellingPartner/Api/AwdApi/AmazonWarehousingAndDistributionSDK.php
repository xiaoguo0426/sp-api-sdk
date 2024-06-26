<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\AwdApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Configuration;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use AmazonPHP\SellingPartner\HttpFactory;
use AmazonPHP\SellingPartner\HttpSignatureHeaders;
use AmazonPHP\SellingPartner\ObjectSerializer;
use Psr\Http\Client\ClientExceptionInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Log\LoggerInterface;

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
final class AmazonWarehousingAndDistributionSDK implements AmazonWarehousingAndDistributionSDKInterface
{
    private ClientInterface $client;

    private HttpFactory $httpFactory;

    private Configuration $configuration;

    private LoggerInterface $logger;

    public function __construct(ClientInterface $client, HttpFactory $requestFactory, Configuration $configuration, LoggerInterface $logger)
    {
        $this->client = $client;
        $this->httpFactory = $requestFactory;
        $this->configuration = $configuration;
        $this->logger = $logger;
    }

    /**
     * Operation getInboundShipment
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $shipment_id  ID for the shipment. A shipment contains the cases being inbounded. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \AmazonPHP\SellingPartner\Model\AmazonWarehousingAndDistribution\InboundShipment
     */
    public function getInboundShipment(AccessToken $accessToken, string $region, $shipment_id)
    {
        $request = $this->getInboundShipmentRequest($accessToken, $region, $shipment_id);

        $this->configuration->extensions()->preRequest('AmazonWarehousingAndDistribution', 'getInboundShipment', $request);

        try {
            $correlationId = $this->configuration->idGenerator()->generate();
            $sanitizedRequest = $request;

            foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
            }

            if ($this->configuration->loggingEnabled('AmazonWarehousingAndDistribution', 'getInboundShipment')) {
                $this->logger->log(
                    $this->configuration->logLevel('AmazonWarehousingAndDistribution', 'getInboundShipment'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'AmazonWarehousingAndDistribution',
                        'operation' => 'getInboundShipment',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('AmazonWarehousingAndDistribution', 'getInboundShipment', $request, $response);

            if ($this->configuration->loggingEnabled('AmazonWarehousingAndDistribution', 'getInboundShipment')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('AmazonWarehousingAndDistribution', 'getInboundShipment'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'AmazonWarehousingAndDistribution',
                        'operation' => 'getInboundShipment',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                        'request_body' => (string) $sanitizedRequest->getBody()
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\AmazonWarehousingAndDistribution\InboundShipment',
            []
        );
    }

    /**
     * Create request for operation 'getInboundShipment'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $shipment_id  ID for the shipment. A shipment contains the cases being inbounded. (required)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return \Psr\Http\Message\RequestInterface
     */
    public function getInboundShipmentRequest(AccessToken $accessToken, string $region, $shipment_id) : RequestInterface
    {
        // verify the required parameter 'shipment_id' is set
        if ($shipment_id === null || (is_array($shipment_id) && count($shipment_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $shipment_id when calling getInboundShipment'
            );
        }
        if (strlen($shipment_id) < 1) {
            throw new InvalidArgumentException('invalid length for "$shipment_id" when calling AwdApi.getInboundShipment, must be bigger than or equal to 1.');
        }


        $resourcePath = '/awd/2024-05-09/inboundShipments/{shipmentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';


        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }


        // path params
        if ($shipment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shipmentId' . '}',
                ObjectSerializer::toPathValue($shipment_id),
                $resourcePath
            );
        }


        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation listInboundShipments
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string|null $sort_by  Field to sort results by. Required if &#x60;sortOrder&#x60; is provided. (optional)
     * @param string|null $sort_order  Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param string|null $shipment_status  Filter by inbound shipment status. (optional)
     * @param \DateTimeInterface|null $updated_after  List the inbound shipments that were updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param \DateTimeInterface|null $updated_before  List the inbound shipments that were updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param int $max_results  Maximum number of results to return. (optional, default to 25)
     * @param string|null $next_token  Token to retrieve the next set of paginated results. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \AmazonPHP\SellingPartner\Model\AmazonWarehousingAndDistribution\ShipmentListing
     */
    public function listInboundShipments(AccessToken $accessToken, string $region, $sort_by = null, $sort_order = null, $shipment_status = null, $updated_after = null, $updated_before = null, $max_results = 25, $next_token = null)
    {
        $request = $this->listInboundShipmentsRequest($accessToken, $region, $sort_by, $sort_order, $shipment_status, $updated_after, $updated_before, $max_results, $next_token);

        $this->configuration->extensions()->preRequest('AmazonWarehousingAndDistribution', 'listInboundShipments', $request);

        try {
            $correlationId = $this->configuration->idGenerator()->generate();
            $sanitizedRequest = $request;

            foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
            }

            if ($this->configuration->loggingEnabled('AmazonWarehousingAndDistribution', 'listInboundShipments')) {
                $this->logger->log(
                    $this->configuration->logLevel('AmazonWarehousingAndDistribution', 'listInboundShipments'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'AmazonWarehousingAndDistribution',
                        'operation' => 'listInboundShipments',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('AmazonWarehousingAndDistribution', 'listInboundShipments', $request, $response);

            if ($this->configuration->loggingEnabled('AmazonWarehousingAndDistribution', 'listInboundShipments')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('AmazonWarehousingAndDistribution', 'listInboundShipments'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'AmazonWarehousingAndDistribution',
                        'operation' => 'listInboundShipments',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                        'request_body' => (string) $sanitizedRequest->getBody()
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\AmazonWarehousingAndDistribution\ShipmentListing',
            []
        );
    }

    /**
     * Create request for operation 'listInboundShipments'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string|null $sort_by  Field to sort results by. Required if &#x60;sortOrder&#x60; is provided. (optional)
     * @param string|null $sort_order  Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param string|null $shipment_status  Filter by inbound shipment status. (optional)
     * @param \DateTimeInterface|null $updated_after  List the inbound shipments that were updated after a certain time (inclusive). The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param \DateTimeInterface|null $updated_before  List the inbound shipments that were updated before a certain time (inclusive). The date must be in &lt;a href&#x3D;&#39;https://developer-docs.amazon.com/sp-api/docs/iso-8601&#39;&gt;ISO 8601&lt;/a&gt; format. (optional)
     * @param int $max_results  Maximum number of results to return. (optional, default to 25)
     * @param string|null $next_token  Token to retrieve the next set of paginated results. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return \Psr\Http\Message\RequestInterface
     */
    public function listInboundShipmentsRequest(AccessToken $accessToken, string $region, $sort_by = null, $sort_order = null, $shipment_status = null, $updated_after = null, $updated_before = null, $max_results = 25, $next_token = null) : RequestInterface
    {
        if ($max_results !== null && $max_results > 200) {
            throw new InvalidArgumentException('invalid value for "$max_results" when calling AwdApi.listInboundShipments, must be smaller than or equal to 200.');
        }
        if ($max_results !== null && $max_results < 1) {
            throw new InvalidArgumentException('invalid value for "$max_results" when calling AwdApi.listInboundShipments, must be bigger than or equal to 1.');
        }


        $resourcePath = '/awd/2024-05-09/inboundShipments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (is_array($sort_by)) {
            $sort_by = ObjectSerializer::serializeCollection($sort_by, '', true);
        }
        if ($sort_by !== null) {
            $queryParams['sortBy'] = ObjectSerializer::toString($sort_by);
        }
        // query params
        if (is_array($sort_order)) {
            $sort_order = ObjectSerializer::serializeCollection($sort_order, '', true);
        }
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = ObjectSerializer::toString($sort_order);
        }
        // query params
        if (is_array($shipment_status)) {
            $shipment_status = ObjectSerializer::serializeCollection($shipment_status, '', true);
        }
        if ($shipment_status !== null) {
            $queryParams['shipmentStatus'] = ObjectSerializer::toString($shipment_status);
        }
        // query params
        if (is_array($updated_after)) {
            $updated_after = ObjectSerializer::serializeCollection($updated_after, '', true);
        }
        if ($updated_after !== null) {
            $queryParams['updatedAfter'] = ObjectSerializer::toString($updated_after);
        }
        // query params
        if (is_array($updated_before)) {
            $updated_before = ObjectSerializer::serializeCollection($updated_before, '', true);
        }
        if ($updated_before !== null) {
            $queryParams['updatedBefore'] = ObjectSerializer::toString($updated_before);
        }
        // query params
        if (is_array($max_results)) {
            $max_results = ObjectSerializer::serializeCollection($max_results, '', true);
        }
        if ($max_results !== null) {
            $queryParams['maxResults'] = ObjectSerializer::toString($max_results);
        }
        // query params
        if (is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }
        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toString($next_token);
        }

        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }




        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

    /**
     * Operation listInventory
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string|null $sku  Filter by seller or merchant SKU for the item. (optional)
     * @param string|null $sort_order  Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param string|null $details  Set to &#x60;SHOW&#x60; to return summaries with additional inventory details. Defaults to &#x60;HIDE,&#x60; which returns only inventory summary totals. (optional)
     * @param string|null $next_token  Token to retrieve the next set of paginated results. (optional)
     * @param int $max_results  Maximum number of results to return. (optional, default to 25)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \AmazonPHP\SellingPartner\Model\AmazonWarehousingAndDistribution\InventoryListing
     */
    public function listInventory(AccessToken $accessToken, string $region, $sku = null, $sort_order = null, $details = null, $next_token = null, $max_results = 25)
    {
        $request = $this->listInventoryRequest($accessToken, $region, $sku, $sort_order, $details, $next_token, $max_results);

        $this->configuration->extensions()->preRequest('AmazonWarehousingAndDistribution', 'listInventory', $request);

        try {
            $correlationId = $this->configuration->idGenerator()->generate();
            $sanitizedRequest = $request;

            foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
            }

            if ($this->configuration->loggingEnabled('AmazonWarehousingAndDistribution', 'listInventory')) {
                $this->logger->log(
                    $this->configuration->logLevel('AmazonWarehousingAndDistribution', 'listInventory'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'AmazonWarehousingAndDistribution',
                        'operation' => 'listInventory',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('AmazonWarehousingAndDistribution', 'listInventory', $request, $response);

            if ($this->configuration->loggingEnabled('AmazonWarehousingAndDistribution', 'listInventory')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('AmazonWarehousingAndDistribution', 'listInventory'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'AmazonWarehousingAndDistribution',
                        'operation' => 'listInventory',
                        'response_correlation_id' => $correlationId,
                        'response_body' => (string) $sanitizedResponse->getBody(),
                        'response_headers' => $sanitizedResponse->getHeaders(),
                        'response_status_code' => $sanitizedResponse->getStatusCode(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                        'request_body' => (string) $sanitizedRequest->getBody()
                    ]
                );
            }
        } catch (ClientExceptionInterface $e) {
            throw new ApiException(
                "[{$e->getCode()}] {$e->getMessage()}",
                (int) $e->getCode(),
                null,
                null,
                $e
            );
        }

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            throw new ApiException(
                sprintf(
                    '[%d] Error connecting to the API (%s)',
                    $statusCode,
                    (string) $request->getUri()
                ),
                $statusCode,
                $response->getHeaders(),
                (string) $response->getBody()
            );
        }

        return ObjectSerializer::deserialize(
            $this->configuration,
            (string) $response->getBody(),
            '\AmazonPHP\SellingPartner\Model\AmazonWarehousingAndDistribution\InventoryListing',
            []
        );
    }

    /**
     * Create request for operation 'listInventory'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string|null $sku  Filter by seller or merchant SKU for the item. (optional)
     * @param string|null $sort_order  Sort the response in &#x60;ASCENDING&#x60; or &#x60;DESCENDING&#x60; order. (optional)
     * @param string|null $details  Set to &#x60;SHOW&#x60; to return summaries with additional inventory details. Defaults to &#x60;HIDE,&#x60; which returns only inventory summary totals. (optional)
     * @param string|null $next_token  Token to retrieve the next set of paginated results. (optional)
     * @param int $max_results  Maximum number of results to return. (optional, default to 25)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return \Psr\Http\Message\RequestInterface
     */
    public function listInventoryRequest(AccessToken $accessToken, string $region, $sku = null, $sort_order = null, $details = null, $next_token = null, $max_results = 25) : RequestInterface
    {
        if ($max_results !== null && $max_results > 200) {
            throw new InvalidArgumentException('invalid value for "$max_results" when calling AwdApi.listInventory, must be smaller than or equal to 200.');
        }
        if ($max_results !== null && $max_results < 1) {
            throw new InvalidArgumentException('invalid value for "$max_results" when calling AwdApi.listInventory, must be bigger than or equal to 1.');
        }


        $resourcePath = '/awd/2024-05-09/inventory';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (is_array($sku)) {
            $sku = ObjectSerializer::serializeCollection($sku, '', true);
        }
        if ($sku !== null) {
            $queryParams['sku'] = ObjectSerializer::toString($sku);
        }
        // query params
        if (is_array($sort_order)) {
            $sort_order = ObjectSerializer::serializeCollection($sort_order, '', true);
        }
        if ($sort_order !== null) {
            $queryParams['sortOrder'] = ObjectSerializer::toString($sort_order);
        }
        // query params
        if (is_array($details)) {
            $details = ObjectSerializer::serializeCollection($details, '', true);
        }
        if ($details !== null) {
            $queryParams['details'] = ObjectSerializer::toString($details);
        }
        // query params
        if (is_array($next_token)) {
            $next_token = ObjectSerializer::serializeCollection($next_token, '', true);
        }
        if ($next_token !== null) {
            $queryParams['nextToken'] = ObjectSerializer::toString($next_token);
        }
        // query params
        if (is_array($max_results)) {
            $max_results = ObjectSerializer::serializeCollection($max_results, '', true);
        }
        if ($max_results !== null) {
            $queryParams['maxResults'] = ObjectSerializer::toString($max_results);
        }

        if (\count($queryParams)) {
            $query = http_build_query($queryParams);
        }




        if ($multipart) {
            $headers = [
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        } else {
            $headers = [
                'content-type' => ['application/json'],
                'accept' => ['application/json'],
                'host' => [$this->configuration->apiHost($region)],
                'user-agent' => [$this->configuration->userAgent()],
            ];
        }

        $request = $this->httpFactory->createRequest(
            'GET',
            $this->configuration->apiURL($region) . $resourcePath . '?' . $query
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                $request = $request->withParsedBody($multipartContents);
            } elseif ($headers['content-type'] === ['application/json']) {
                $request = $request->withBody($this->httpFactory->createStreamFromString(\json_encode($formParams)));
            } else {
                $request = $request->withParsedBody($formParams);
            }
        }

        foreach (\array_merge($headerParams, $headers) as $name => $header) {
            $request = $request->withHeader($name, $header);
        }

        return HttpSignatureHeaders::forConfig(
            $this->configuration,
            $accessToken,
            $region,
            $request
        );
    }

}
