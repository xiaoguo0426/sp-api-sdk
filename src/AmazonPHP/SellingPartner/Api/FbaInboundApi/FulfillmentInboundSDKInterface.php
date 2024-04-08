<?php

namespace AmazonPHP\SellingPartner\Api\FbaInboundApi;

use AmazonPHP\SellingPartner\AccessToken;
use AmazonPHP\SellingPartner\Exception\ApiException;
use AmazonPHP\SellingPartner\Exception\InvalidArgumentException;
use Psr\Http\Message\RequestInterface;

/**
* The Selling Partner API for FBA inbound operations.
*
* The Selling Partner API for Fulfillment By Amazon (FBA) Inbound. The FBA Inbound API enables building inbound workflows to create, manage, and send shipments into Amazon's fulfillment network. The API has interoperability with the Send-to-Amazon user interface.
*
* The version of the OpenAPI document: 2024-03-20
*
* This class was auto-generated by https://openapi-generator.tech
* Do not change it, it will be overwritten with next execution of /bin/generate.sh
*/
interface FulfillmentInboundSDKInterface
{
    public const API_NAME = 'FulfillmentInbound';

    public const OPERATION_CANCELINBOUNDPLAN = 'cancelInboundPlan';

    public const OPERATION_CANCELINBOUNDPLAN_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/cancellation';
    public const OPERATION_CANCELSELFSHIPAPPOINTMENT = 'cancelSelfShipAppointment';

    public const OPERATION_CANCELSELFSHIPAPPOINTMENT_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots/{slotId}/cancellation';
    public const OPERATION_CONFIRMPACKINGOPTION = 'confirmPackingOption';

    public const OPERATION_CONFIRMPACKINGOPTION_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions/{packingOptionId}/confirmation';
    public const OPERATION_CONFIRMPLACEMENTOPTION = 'confirmPlacementOption';

    public const OPERATION_CONFIRMPLACEMENTOPTION_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/placementOptions/{placementOptionId}/confirmation';
    public const OPERATION_CONFIRMTRANSPORTATIONOPTIONS = 'confirmTransportationOptions';

    public const OPERATION_CONFIRMTRANSPORTATIONOPTIONS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/transportationOptions/confirmation';
    public const OPERATION_CREATEINBOUNDPLAN = 'createInboundPlan';

    public const OPERATION_CREATEINBOUNDPLAN_PATH = '/inbound/fba/2024-03-20/inboundPlans';
    public const OPERATION_GENERATEPACKINGOPTIONS = 'generatePackingOptions';

    public const OPERATION_GENERATEPACKINGOPTIONS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions';
    public const OPERATION_GENERATEPLACEMENTOPTIONS = 'generatePlacementOptions';

    public const OPERATION_GENERATEPLACEMENTOPTIONS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/placementOptions';
    public const OPERATION_GENERATESELFSHIPAPPOINTMENTSLOTS = 'generateSelfShipAppointmentSlots';

    public const OPERATION_GENERATESELFSHIPAPPOINTMENTSLOTS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots';
    public const OPERATION_GENERATETRANSPORTATIONOPTIONS = 'generateTransportationOptions';

    public const OPERATION_GENERATETRANSPORTATIONOPTIONS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/transportationOptions';
    public const OPERATION_GETDELIVERYCHALLANDOCUMENT = 'getDeliveryChallanDocument';

    public const OPERATION_GETDELIVERYCHALLANDOCUMENT_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryChallanDocument';
    public const OPERATION_GETINBOUNDOPERATIONSTATUS = 'getInboundOperationStatus';

    public const OPERATION_GETINBOUNDOPERATIONSTATUS_PATH = '/inbound/fba/2024-03-20/operations/{operationId}';
    public const OPERATION_GETINBOUNDPLAN = 'getInboundPlan';

    public const OPERATION_GETINBOUNDPLAN_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}';
    public const OPERATION_GETSELFSHIPAPPOINTMENTSLOTS = 'getSelfShipAppointmentSlots';

    public const OPERATION_GETSELFSHIPAPPOINTMENTSLOTS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots';
    public const OPERATION_GETSHIPMENT = 'getShipment';

    public const OPERATION_GETSHIPMENT_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}';
    public const OPERATION_LISTINBOUNDPLANBOXES = 'listInboundPlanBoxes';

    public const OPERATION_LISTINBOUNDPLANBOXES_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/boxes';
    public const OPERATION_LISTINBOUNDPLANITEMS = 'listInboundPlanItems';

    public const OPERATION_LISTINBOUNDPLANITEMS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/items';
    public const OPERATION_LISTINBOUNDPLANPALLETS = 'listInboundPlanPallets';

    public const OPERATION_LISTINBOUNDPLANPALLETS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/pallets';
    public const OPERATION_LISTINBOUNDPLANS = 'listInboundPlans';

    public const OPERATION_LISTINBOUNDPLANS_PATH = '/inbound/fba/2024-03-20/inboundPlans';
    public const OPERATION_LISTITEMCOMPLIANCEDETAILS = 'listItemComplianceDetails';

    public const OPERATION_LISTITEMCOMPLIANCEDETAILS_PATH = '/inbound/fba/2024-03-20/items/compliance';
    public const OPERATION_LISTPACKINGGROUPITEMS = 'listPackingGroupItems';

    public const OPERATION_LISTPACKINGGROUPITEMS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions/{packingOptionId}/packingGroups/{packingGroupId}/items';
    public const OPERATION_LISTPACKINGOPTIONS = 'listPackingOptions';

    public const OPERATION_LISTPACKINGOPTIONS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingOptions';
    public const OPERATION_LISTPLACEMENTOPTIONS = 'listPlacementOptions';

    public const OPERATION_LISTPLACEMENTOPTIONS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/placementOptions';
    public const OPERATION_LISTTRANSPORTATIONOPTIONS = 'listTransportationOptions';

    public const OPERATION_LISTTRANSPORTATIONOPTIONS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/transportationOptions';
    public const OPERATION_SCHEDULESELFSHIPAPPOINTMENT = 'scheduleSelfShipAppointment';

    public const OPERATION_SCHEDULESELFSHIPAPPOINTMENT_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/selfShipAppointmentSlots/{slotId}/schedule';
    public const OPERATION_SETPACKINGINFORMATION = 'setPackingInformation';

    public const OPERATION_SETPACKINGINFORMATION_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/packingInformation';
    public const OPERATION_UPDATEITEMCOMPLIANCEDETAILS = 'updateItemComplianceDetails';

    public const OPERATION_UPDATEITEMCOMPLIANCEDETAILS_PATH = '/inbound/fba/2024-03-20/items/compliance';
    public const OPERATION_UPDATESHIPMENTDELIVERYWINDOW = 'updateShipmentDeliveryWindow';

    public const OPERATION_UPDATESHIPMENTDELIVERYWINDOW_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/deliveryWindow';
    public const OPERATION_UPDATESHIPMENTTRACKINGDETAILS = 'updateShipmentTrackingDetails';

    public const OPERATION_UPDATESHIPMENTTRACKINGDETAILS_PATH = '/inbound/fba/2024-03-20/inboundPlans/{inboundPlanId}/shipments/{shipmentId}/trackingDetails';

    /**
    * Operation cancelInboundPlan
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\CancelInboundPlanResponse
    */
    public function cancelInboundPlan(AccessToken $accessToken, string $region, $inbound_plan_id);
    /**
    * Operation cancelSelfShipAppointment
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $shipment_id  Identifier to a shipment. A shipment contains the boxes and units being inbounded. (required)
    * @param string $slot_id  Identifier to a self-ship appointment slot. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\CancelSelfShipAppointmentRequest $body  The body of the request to &#x60;cancelSelfShipAppointment&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\CancelSelfShipAppointmentResponse
    */
    public function cancelSelfShipAppointment(AccessToken $accessToken, string $region, $inbound_plan_id, $shipment_id, $slot_id, $body);
    /**
    * Operation confirmPackingOption
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $packing_option_id  Identifier to a packing option. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ConfirmPackingOptionResponse
    */
    public function confirmPackingOption(AccessToken $accessToken, string $region, $inbound_plan_id, $packing_option_id);
    /**
    * Operation confirmPlacementOption
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $placement_option_id  Identifier to a placement option. A placement option represents the shipment splits and destinations of SKUs. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ConfirmPlacementOptionResponse
    */
    public function confirmPlacementOption(AccessToken $accessToken, string $region, $inbound_plan_id, $placement_option_id);
    /**
    * Operation confirmTransportationOptions
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ConfirmTransportationOptionsRequest $body  The body of the request to &#x60;confirmTransportationOptions&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ConfirmTransportationOptionsResponse
    */
    public function confirmTransportationOptions(AccessToken $accessToken, string $region, $inbound_plan_id, $body);
    /**
    * Operation createInboundPlan
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\CreateInboundPlanRequest $body  The body of the request to &#x60;createInboundPlan&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\CreateInboundPlanResponse
    */
    public function createInboundPlan(AccessToken $accessToken, string $region, $body);
    /**
    * Operation generatePackingOptions
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GeneratePackingOptionsResponse
    */
    public function generatePackingOptions(AccessToken $accessToken, string $region, $inbound_plan_id);
    /**
    * Operation generatePlacementOptions
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GeneratePlacementOptionsRequest $body  The body of the request to &#x60;generatePlacementOptions&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GeneratePlacementOptionsResponse
    */
    public function generatePlacementOptions(AccessToken $accessToken, string $region, $inbound_plan_id, $body);
    /**
    * Operation generateSelfShipAppointmentSlots
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $shipment_id  Identifier to a shipment. A shipment contains the boxes and units being inbounded. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GenerateSelfShipAppointmentSlotsRequest $body  The body of the request &#x60;generateSelfShipAppointmentSlots&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GenerateSelfShipAppointmentSlotsResponse
    */
    public function generateSelfShipAppointmentSlots(AccessToken $accessToken, string $region, $inbound_plan_id, $shipment_id, $body);
    /**
    * Operation generateTransportationOptions
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GenerateTransportationOptionsRequest $body  The body of the request to &#x60;generateTransportationOptions&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GenerateTransportationOptionsResponse
    */
    public function generateTransportationOptions(AccessToken $accessToken, string $region, $inbound_plan_id, $body);
    /**
    * Operation getDeliveryChallanDocument
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $shipment_id  Identifier to a shipment. A shipment contains the boxes and units being inbounded. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetDeliveryChallanDocumentResponse
    */
    public function getDeliveryChallanDocument(AccessToken $accessToken, string $region, $inbound_plan_id, $shipment_id);
    /**
    * Operation getInboundOperationStatus
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $operation_id  Identifier to an asynchronous operation. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundOperationStatus
    */
    public function getInboundOperationStatus(AccessToken $accessToken, string $region, $operation_id);
    /**
    * Operation getInboundPlan
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\InboundPlan
    */
    public function getInboundPlan(AccessToken $accessToken, string $region, $inbound_plan_id);
    /**
    * Operation getSelfShipAppointmentSlots
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $shipment_id  Identifier to a shipment. A shipment contains the boxes and units being inbounded. (required)
    * @param int $page_size  The number of self ship appointment slots to return in the response matching the given query. (optional, default to 10)
    * @param string|null $pagination_token  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\GetSelfShipAppointmentSlotsResponse
    */
    public function getSelfShipAppointmentSlots(AccessToken $accessToken, string $region, $inbound_plan_id, $shipment_id, $page_size = 10, $pagination_token = null);
    /**
    * Operation getShipment
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $shipment_id  Identifier to a shipment. A shipment contains the boxes and units being inbounded. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\Shipment
    */
    public function getShipment(AccessToken $accessToken, string $region, $inbound_plan_id, $shipment_id);
    /**
    * Operation listInboundPlanBoxes
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param int $page_size  The number of boxes to return in the response matching the given query. (optional, default to 10)
    * @param string|null $pagination_token  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ListInboundPlanBoxesResponse
    */
    public function listInboundPlanBoxes(AccessToken $accessToken, string $region, $inbound_plan_id, $page_size = 10, $pagination_token = null);
    /**
    * Operation listInboundPlanItems
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param int $page_size  The number of items to return in the response matching the given query. (optional, default to 10)
    * @param string|null $pagination_token  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ListInboundPlanItemsResponse
    */
    public function listInboundPlanItems(AccessToken $accessToken, string $region, $inbound_plan_id, $page_size = 10, $pagination_token = null);
    /**
    * Operation listInboundPlanPallets
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param int $page_size  The number of pallets to return in the response matching the given query. (optional, default to 10)
    * @param string|null $pagination_token  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ListInboundPlanPalletsResponse
    */
    public function listInboundPlanPallets(AccessToken $accessToken, string $region, $inbound_plan_id, $page_size = 10, $pagination_token = null);
    /**
    * Operation listInboundPlans
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param int $page_size  The number of inbound plans to return in the response matching the given query. (optional, default to 10)
    * @param string|null $pagination_token  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. (optional)
    * @param string|null $status  The status of an inbound plan. (optional)
    * @param string|null $sort_by  Sort by field. (optional)
    * @param string|null $sort_order  The sort order. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ListInboundPlansResponse
    */
    public function listInboundPlans(AccessToken $accessToken, string $region, $page_size = 10, $pagination_token = null, $status = null, $sort_by = null, $sort_order = null);
    /**
    * Operation listItemComplianceDetails
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string[] $mskus  List of merchant SKUs, a merchant-supplied identifier for a specific SKU. (required)
    * @param string $marketplace_id  The Marketplace ID. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a list of possible values. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ListItemComplianceDetailsResponse
    */
    public function listItemComplianceDetails(AccessToken $accessToken, string $region, $mskus, $marketplace_id);
    /**
    * Operation listPackingGroupItems
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $packing_option_id  Identifier to a packing option. (required)
    * @param string $packing_group_id  Identifier to a packing group. (required)
    * @param int $page_size  The number of packing group items to return in the response matching the given query. (optional, default to 10)
    * @param string|null $pagination_token  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ListPackingGroupItemsResponse
    */
    public function listPackingGroupItems(AccessToken $accessToken, string $region, $inbound_plan_id, $packing_option_id, $packing_group_id, $page_size = 10, $pagination_token = null);
    /**
    * Operation listPackingOptions
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param int $page_size  The number of packing options to return in the response matching the given query. (optional, default to 10)
    * @param string|null $pagination_token  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ListPackingOptionsResponse
    */
    public function listPackingOptions(AccessToken $accessToken, string $region, $inbound_plan_id, $page_size = 10, $pagination_token = null);
    /**
    * Operation listPlacementOptions
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param int $page_size  The number of placement options to return in the response matching the given query. (optional, default to 10)
    * @param string|null $pagination_token  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ListPlacementOptionsResponse
    */
    public function listPlacementOptions(AccessToken $accessToken, string $region, $inbound_plan_id, $page_size = 10, $pagination_token = null);
    /**
    * Operation listTransportationOptions
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param int $page_size  The number of transportation options to return in the response matching the given query. (optional, default to 10)
    * @param string|null $pagination_token  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the &#x60;pagination&#x60; returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result. (optional)
    * @param string|null $placement_option_id  The placement option to get transportation options for. Either placementOptionId or shipmentId must be specified. (optional)
    * @param string|null $shipment_id  The shipment to get transportation options for. Either placementOptionId or shipmentId must be specified. (optional)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ListTransportationOptionsResponse
    */
    public function listTransportationOptions(AccessToken $accessToken, string $region, $inbound_plan_id, $page_size = 10, $pagination_token = null, $placement_option_id = null, $shipment_id = null);
    /**
    * Operation scheduleSelfShipAppointment
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $shipment_id  Identifier to a shipment. A shipment contains the boxes and units being inbounded. (required)
    * @param string $slot_id  Identifier to a self-ship appointment slot. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ScheduleSelfShipAppointmentRequest $body  The body of the request to &#x60;scheduleSelfShipAppointment&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\ScheduleSelfShipAppointmentResponse
    */
    public function scheduleSelfShipAppointment(AccessToken $accessToken, string $region, $inbound_plan_id, $shipment_id, $slot_id, $body);
    /**
    * Operation setPackingInformation
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\SetPackingInformationRequest $body  The body of the request to &#x60;setPackingInformation&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\SetPackingInformationResponse
    */
    public function setPackingInformation(AccessToken $accessToken, string $region, $inbound_plan_id, $body);
    /**
    * Operation updateItemComplianceDetails
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $marketplace_id  The Marketplace ID. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a list of possible values. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\UpdateItemComplianceDetailsRequest $body  The body of the request to &#x60;updateItemComplianceDetails&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\UpdateItemComplianceDetailsResponse
    */
    public function updateItemComplianceDetails(AccessToken $accessToken, string $region, $marketplace_id, $body);
    /**
    * Operation updateShipmentDeliveryWindow
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $shipment_id  Identifier to a shipment. A shipment contains the boxes and units being inbounded. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\UpdateShipmentDeliveryWindowRequest $body  The body of the request to &#x60;updateShipmentDeliveryWindow&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\UpdateShipmentDeliveryWindowResponse
    */
    public function updateShipmentDeliveryWindow(AccessToken $accessToken, string $region, $inbound_plan_id, $shipment_id, $body);
    /**
    * Operation updateShipmentTrackingDetails
    *
    * @param AccessToken $accessToken
    * @param string $region
    * @param string $inbound_plan_id  Identifier to an inbound plan. (required)
    * @param string $shipment_id  Identifier to a shipment. A shipment contains the boxes and units being inbounded. (required)
    * @param \AmazonPHP\SellingPartner\Model\FulfillmentInbound\UpdateShipmentTrackingDetailsRequest $body  The body of the request to &#x60;updateShipmentTrackingDetails&#x60;. (required)
    *
    * @throws ApiException on non-2xx response
    * @throws InvalidArgumentException
    * @return \AmazonPHP\SellingPartner\Model\FulfillmentInbound\UpdateShipmentTrackingDetailsResponse
    */
    public function updateShipmentTrackingDetails(AccessToken $accessToken, string $region, $inbound_plan_id, $shipment_id, $body);
}
