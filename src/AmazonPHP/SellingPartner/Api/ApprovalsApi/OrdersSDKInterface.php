<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\ApprovalsApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface OrdersSDKInterface
{
    public const API_NAME = 'Orders';

    public const OPERATION_GETORDERITEMSAPPROVALS = 'getOrderItemsApprovals';

    public const OPERATION_GETORDERITEMSAPPROVALS_PATH = '/orders/v0/orders/{orderId}/approvals';

    public const OPERATION_UPDATEORDERITEMSAPPROVALS = 'updateOrderItemsApprovals';

    public const OPERATION_UPDATEORDERITEMSAPPROVALS_PATH = '/orders/v0/orders/{orderId}/approvals';

    /**
     * Operation getOrderItemsApprovals.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format, e.g. 933-1671587-0818628. (required)
     * @param null|string $next_token A string token returned in the response of your previous request. (optional)
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\ItemApprovalType[] $item_approval_types When set, only return approvals for items which approval type is contained in the specified approval types. (optional)
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\ItemApprovalStatus[] $item_approval_status When set, only return approvals that contain items which approval status is contained in the specified approval status. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function getOrderItemsApprovals(AccessToken $accessToken, string $region, string $order_id, ?string $next_token = null, ?array $item_approval_types = null, ?array $item_approval_status = null) : \AmazonPHP\SellingPartner\Model\Orders\GetOrderApprovalsResponse;

    /**
     * Operation updateOrderItemsApprovals.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param \AmazonPHP\SellingPartner\Model\Orders\UpdateOrderApprovalsRequest $payload The request body for the updateOrderItemsApprovals operation. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     */
    public function updateOrderItemsApprovals(AccessToken $accessToken, string $region, string $order_id, \AmazonPHP\SellingPartner\Model\Orders\UpdateOrderApprovalsRequest $payload);
}
