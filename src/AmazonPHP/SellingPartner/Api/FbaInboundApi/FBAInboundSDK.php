<?php

declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\FbaInboundApi;

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
* Selling Partner API for FBA Inbound Eligibilty
*
* With the FBA Inbound Eligibility API, you can build applications that let sellers get eligibility previews for items before shipping them to Amazon's fulfillment centers. With this API you can find out if an item is eligible for inbound shipment to Amazon's fulfillment centers in a specific marketplace. You can also find out if an item is eligible for using the manufacturer barcode for FBA inventory tracking. Sellers can use this information to inform their decisions about which items to ship Amazon's fulfillment centers.
*
* The version of the OpenAPI document: v1
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
*/
final class FBAInboundSDK implements FBAInboundSDKInterface
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
     * Operation getItemEligibilityPreview
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $asin  The ASIN of the item for which you want an eligibility preview. (required)
     * @param string $program  The program that you want to check eligibility against. (required)
     * @param string[]|null $marketplace_ids  The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return \AmazonPHP\SellingPartner\Model\FBAInbound\GetItemEligibilityPreviewResponse
     */
    public function getItemEligibilityPreview(AccessToken $accessToken, string $region, $asin, $program, $marketplace_ids = null)
    {
        $request = $this->getItemEligibilityPreviewRequest($accessToken, $region, $asin, $program, $marketplace_ids);

        $this->configuration->extensions()->preRequest('FBAInbound', 'getItemEligibilityPreview', $request);

        try {
            $correlationId = $this->configuration->idGenerator()->generate();
            $sanitizedRequest = $request;

            foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                $sanitizedRequest = $sanitizedRequest->withoutHeader($sensitiveHeader);
            }

            if ($this->configuration->loggingEnabled('FBAInbound', 'getItemEligibilityPreview')) {
                $this->logger->log(
                    $this->configuration->logLevel('FBAInbound', 'getItemEligibilityPreview'),
                    'Amazon Selling Partner API pre request',
                    [
                        'api' => 'FBAInbound',
                        'operation' => 'getItemEligibilityPreview',
                        'request_correlation_id' => $correlationId,
                        'request_body' => (string) $sanitizedRequest->getBody(),
                        'request_headers' => $sanitizedRequest->getHeaders(),
                        'request_uri' => (string) $sanitizedRequest->getUri(),
                    ]
                );
            }

            $response = $this->client->sendRequest($request);

            $this->configuration->extensions()->postRequest('FBAInbound', 'getItemEligibilityPreview', $request, $response);

            if ($this->configuration->loggingEnabled('FBAInbound', 'getItemEligibilityPreview')) {

                $sanitizedResponse = $response;

                foreach ($this->configuration->loggingSkipHeaders() as $sensitiveHeader) {
                    $sanitizedResponse = $sanitizedResponse->withoutHeader($sensitiveHeader);
                }

                $this->logger->log(
                    $this->configuration->logLevel('FBAInbound', 'getItemEligibilityPreview'),
                    'Amazon Selling Partner API post request',
                    [
                        'api' => 'FBAInbound',
                        'operation' => 'getItemEligibilityPreview',
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
            '\AmazonPHP\SellingPartner\Model\FBAInbound\GetItemEligibilityPreviewResponse',
            []
        );
    }

    /**
     * Create request for operation 'getItemEligibilityPreview'
     *
     * @param AccessToken $accessToken
     * @param string $region
     * @param string $asin  The ASIN of the item for which you want an eligibility preview. (required)
     * @param string $program  The program that you want to check eligibility against. (required)
     * @param string[]|null $marketplace_ids  The identifier for the marketplace in which you want to determine eligibility. Required only when program&#x3D;INBOUND. (optional)
     *
     * @throws \AmazonPHP\SellingPartner\Exception\InvalidArgumentException
     * @return \Psr\Http\Message\RequestInterface
     */
    public function getItemEligibilityPreviewRequest(AccessToken $accessToken, string $region, $asin, $program, $marketplace_ids = null) : RequestInterface
    {
        // verify the required parameter 'asin' is set
        if ($asin === null || (is_array($asin) && count($asin) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $asin when calling getItemEligibilityPreview'
            );
        }
        // verify the required parameter 'program' is set
        if ($program === null || (is_array($program) && count($program) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $program when calling getItemEligibilityPreview'
            );
        }
        if ($marketplace_ids !== null && count($marketplace_ids) > 1) {
            throw new InvalidArgumentException('invalid value for "$marketplace_ids" when calling FbaInboundApi.getItemEligibilityPreview, number of items must be less than or equal to 1.');
        }


        $resourcePath = '/fba/inbound/v1/eligibility/itemPreview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $multipart = false;
        $query = '';

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toString($marketplace_ids);
        }
        // query params
        if (is_array($asin)) {
            $asin = ObjectSerializer::serializeCollection($asin, '', true);
        }
        if ($asin !== null) {
            $queryParams['asin'] = ObjectSerializer::toString($asin);
        }
        // query params
        if (is_array($program)) {
            $program = ObjectSerializer::serializeCollection($program, '', true);
        }
        if ($program !== null) {
            $queryParams['program'] = ObjectSerializer::toString($program);
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
