<?php

namespace AmazonPHP\SellingPartner\Api\FbaInventoryApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

/**
* Selling Partner API for FBA Inventory
*
* The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
*
* The version of the OpenAPI document: v1
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
*/
interface FBAInventorySDKInterface
{
    public const API_NAME = 'FBAInventory';

    public const OPERATION_ADDINVENTORY = 'addInventory';

    public const OPERATION_ADDINVENTORY_PATH = '/fba/inventory/v1/items/inventory';
    public const OPERATION_CREATEINVENTORYITEM = 'createInventoryItem';

    public const OPERATION_CREATEINVENTORYITEM_PATH = '/fba/inventory/v1/items';
    public const OPERATION_DELETEINVENTORYITEM = 'deleteInventoryItem';

    public const OPERATION_DELETEINVENTORYITEM_PATH = '/fba/inventory/v1/items/{sellerSku}';
    public const OPERATION_GETINVENTORYSUMMARIES = 'getInventorySummaries';

    public const OPERATION_GETINVENTORYSUMMARIES_PATH = '/fba/inventory/v1/summaries';

    /**
    * Operation addInventory
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $x_amzn_idempotency_token  A unique token/requestId provided with each call to ensure idempotency. (required)
    * @param \AmazonPHP\SellingPartner\Model\FBAInventory\AddInventoryRequest $add_inventory_request_body  List of items to add to Sandbox inventory. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FBAInventory\AddInventoryResponse
    */
    public function addInventory(AccessToken $accessToken, string $region, $x_amzn_idempotency_token, $add_inventory_request_body);
    /**
    * Operation createInventoryItem
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param \AmazonPHP\SellingPartner\Model\FBAInventory\CreateInventoryItemRequest $create_inventory_item_request_body  CreateInventoryItem Request Body Parameter. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FBAInventory\CreateInventoryItemResponse
    */
    public function createInventoryItem(AccessToken $accessToken, string $region, $create_inventory_item_request_body);
    /**
    * Operation deleteInventoryItem
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $seller_sku  A single seller SKU used for querying the specified seller SKU inventory summaries. (required)
    * @param string $marketplace_id  The marketplace ID for the marketplace for which the sellerSku is to be deleted. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FBAInventory\DeleteInventoryItemResponse
    */
    public function deleteInventoryItem(AccessToken $accessToken, string $region, $seller_sku, $marketplace_id);
    /**
    * Operation getInventorySummaries
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $granularity_type  The granularity type for the inventory aggregation level. (required)
    * @param string $granularity_id  The granularity ID for the inventory aggregation level. (required)
    * @param string[] $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
    * @param bool $details  true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
    * @param \DateTimeInterface|null $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
    * @param string[]|null $seller_skus  A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
    * @param string|null $seller_sku  A single seller SKU used for querying the specified seller SKU inventory summaries. (optional)
    * @param string|null $next_token  String token returned in the response of your previous request. The string token will expire 30 seconds after being created. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FBAInventory\GetInventorySummariesResponse
    */
    public function getInventorySummaries(AccessToken $accessToken, string $region, $granularity_type, $granularity_id, $marketplace_ids, $details = false, $start_date_time = null, $seller_skus = null, $seller_sku = null, $next_token = null);
}
