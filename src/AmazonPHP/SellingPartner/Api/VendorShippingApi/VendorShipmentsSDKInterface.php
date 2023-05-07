<?php declare(strict_types=1);

namespace AmazonPHP\SellingPartner\Api\VendorShippingApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;

/**
 * Selling Partner API for Retail Procurement Shipments.
 *
 * The Selling Partner API for Retail Procurement Shipments provides programmatic access to retail shipping data for vendors.
 *
 * The version of the OpenAPI document: v1
 *
 * This class was auto-generated by https://openapi-generator.tech
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh
 */
interface VendorShipmentsSDKInterface
{
    public const API_NAME = 'VendorShipments';

    public const OPERATION_GETSHIPMENTDETAILS = 'getShipmentDetails';

    public const OPERATION_GETSHIPMENTDETAILS_PATH = '/vendor/shipping/v1/shipments';

    public const OPERATION_GETSHIPMENTLABELS = 'getShipmentLabels';

    public const OPERATION_GETSHIPMENTLABELS_PATH = '/vendor/shipping/v1/transportLabels';

    public const OPERATION_SUBMITSHIPMENTCONFIRMATIONS = 'submitShipmentConfirmations';

    public const OPERATION_SUBMITSHIPMENTCONFIRMATIONS_PATH = '/vendor/shipping/v1/shipmentConfirmations';

    public const OPERATION_SUBMITSHIPMENTS = 'submitShipments';

    public const OPERATION_SUBMITSHIPMENTS_PATH = '/vendor/shipping/v1/shipments';

    /**
     * Operation getShipmentDetails.
     *
     * @param null|int $limit The limit to the number of records returned. Default value is 50 records. (optional)
     * @param null|string $sort_order Sort in ascending or descending order by purchase order creation date. (optional)
     * @param null|string $next_token Used for pagination when there are more shipments than the specified result size limit. (optional)
     * @param null|\DateTimeInterface $created_after Get Shipment Details that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $created_before Get Shipment Details that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $shipment_confirmed_before Get Shipment Details by passing Shipment confirmed create Date Before. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $shipment_confirmed_after Get Shipment Details by passing Shipment confirmed create Date After. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $package_label_created_before Get Shipment Details by passing Package label create Date by buyer. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $package_label_created_after Get Shipment Details by passing Package label create Date After by buyer. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $shipped_before Get Shipment Details by passing Shipped Date Before. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $shipped_after Get Shipment Details by passing Shipped Date After. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $estimated_delivery_before Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $estimated_delivery_after Get Shipment Details by passing Estimated Delivery Date Before. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $shipment_delivery_before Get Shipment Details by passing Shipment Delivery Date Before. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $shipment_delivery_after Get Shipment Details by passing Shipment Delivery Date After. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $requested_pick_up_before Get Shipment Details by passing Before Requested pickup date. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $requested_pick_up_after Get Shipment Details by passing After Requested pickup date. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $scheduled_pick_up_before Get Shipment Details by passing Before scheduled pickup date. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $scheduled_pick_up_after Get Shipment Details by passing After Scheduled pickup date. Must be in ISO-8601 date/time format. (optional)
     * @param null|string $current_shipment_status Get Shipment Details by passing Current shipment status. (optional)
     * @param null|string $vendor_shipment_identifier Get Shipment Details by passing Vendor Shipment ID (optional)
     * @param null|string $buyer_reference_number Get Shipment Details by passing buyer Reference ID (optional)
     * @param null|string $buyer_warehouse_code Get Shipping Details based on buyer warehouse code. This value should be same as &#39;shipToParty.partyId&#39; in the Shipment. (optional)
     * @param null|string $seller_warehouse_code Get Shipping Details based on vendor warehouse code. This value should be same as &#39;sellingParty.partyId&#39; in the Shipment. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorShipments\GetShipmentDetailsResponse
     */
    public function getShipmentDetails(AccessToken $accessToken, string $region, ?int $limit = null, ?string $sort_order = null, ?string $next_token = null, ?\DateTimeInterface $created_after = null, ?\DateTimeInterface $created_before = null, ?\DateTimeInterface $shipment_confirmed_before = null, ?\DateTimeInterface $shipment_confirmed_after = null, ?\DateTimeInterface $package_label_created_before = null, ?\DateTimeInterface $package_label_created_after = null, ?\DateTimeInterface $shipped_before = null, ?\DateTimeInterface $shipped_after = null, ?\DateTimeInterface $estimated_delivery_before = null, ?\DateTimeInterface $estimated_delivery_after = null, ?\DateTimeInterface $shipment_delivery_before = null, ?\DateTimeInterface $shipment_delivery_after = null, ?\DateTimeInterface $requested_pick_up_before = null, ?\DateTimeInterface $requested_pick_up_after = null, ?\DateTimeInterface $scheduled_pick_up_before = null, ?\DateTimeInterface $scheduled_pick_up_after = null, ?string $current_shipment_status = null, ?string $vendor_shipment_identifier = null, ?string $buyer_reference_number = null, ?string $buyer_warehouse_code = null, ?string $seller_warehouse_code = null) : \AmazonPHP\SellingPartner\Model\VendorShipments\GetShipmentDetailsResponse;

    /**
     * Operation getShipmentLabels.
     *
     * @param null|int $limit The limit to the number of records returned. Default value is 50 records. (optional)
     * @param null|string $sort_order Sort in ascending or descending order by transport label creation date. (optional)
     * @param null|string $next_token Used for pagination when there are more transport label than the specified result size limit. (optional)
     * @param null|\DateTimeInterface $label_created_after transport Labels that became available after this timestamp will be included in the result. Must be in ISO-8601 date/time format. (optional)
     * @param null|\DateTimeInterface $labelcreated_before transport Labels that became available before this timestamp will be included in the result. Must be in ISO-8601 date/time format. (optional)
     * @param null|string $buyer_reference_number Get transport labels by passing Buyer Reference Number to retreive the corresponding transport label. (optional)
     * @param null|string $vendor_shipment_identifier Get transport labels by passing Vendor Shipment ID to retreive the corresponding transport label. (optional)
     * @param null|string $seller_warehouse_code Get Shipping labels based Vendor Warehouse code. This value should be same as &#39;shipFromParty.partyId&#39; in the Shipment. (optional)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorShipments\GetShipmentLabels
     */
    public function getShipmentLabels(AccessToken $accessToken, string $region, ?int $limit = null, ?string $sort_order = null, ?string $next_token = null, ?\DateTimeInterface $label_created_after = null, ?\DateTimeInterface $labelcreated_before = null, ?string $buyer_reference_number = null, ?string $vendor_shipment_identifier = null, ?string $seller_warehouse_code = null) : \AmazonPHP\SellingPartner\Model\VendorShipments\GetShipmentLabels;

    /**
     * Operation submitShipmentConfirmations.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipmentConfirmationsRequest $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipmentConfirmationsResponse
     */
    public function submitShipmentConfirmations(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipmentConfirmationsRequest $body) : \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipmentConfirmationsResponse;

    /**
     * Operation submitShipments.
     *
     * @param \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipments $body body (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     *
     * @return \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipmentConfirmationsResponse
     */
    public function submitShipments(AccessToken $accessToken, string $region, \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipments $body) : \AmazonPHP\SellingPartner\Model\VendorShipments\SubmitShipmentConfirmationsResponse;
}
