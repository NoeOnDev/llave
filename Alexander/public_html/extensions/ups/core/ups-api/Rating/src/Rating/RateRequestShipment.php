<?php
/**
 * RateRequestShipment
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Rate
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Rating\Rating;

use \ArrayAccess;
use \UPS\Rating\ObjectSerializer;

/**
 * RateRequestShipment Class Doc Comment
 *
 * @category Class
 * @description Container for Shipment Information.
 * @package  UPS\Rating
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RateRequestShipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RateRequest_Shipment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'origin_record_transaction_timestamp' => 'string',
        'shipper' => '\UPS\Rating\Rating\ShipmentShipper',
        'ship_to' => '\UPS\Rating\Rating\ShipmentShipTo',
        'ship_from' => '\UPS\Rating\Rating\ShipmentShipFrom',
        'alternate_delivery_address' => '\UPS\Rating\Rating\ShipmentAlternateDeliveryAddress',
        'shipment_indication_type' => '\UPS\Rating\Rating\ShipmentShipmentIndicationType[]',
        'payment_details' => '\UPS\Rating\Rating\ShipmentPaymentDetails',
        'frs_payment_information' => '\UPS\Rating\Rating\ShipmentFRSPaymentInformation',
        'freight_shipment_information' => '\UPS\Rating\Rating\ShipmentFreightShipmentInformation',
        'goods_not_in_free_circulation_indicator' => 'string',
        'service' => '\UPS\Rating\Rating\ShipmentService',
        'num_of_pieces' => 'string',
        'shipment_total_weight' => '\UPS\Rating\Rating\ShipmentShipmentTotalWeight',
        'documents_only_indicator' => 'string',
        'package' => '\UPS\Rating\Rating\ShipmentPackage[]',
        'shipment_service_options' => '\UPS\Rating\Rating\ShipmentShipmentServiceOptions',
        'shipment_rating_options' => '\UPS\Rating\Rating\ShipmentShipmentRatingOptions',
        'invoice_line_total' => '\UPS\Rating\Rating\ShipmentInvoiceLineTotal',
        'rating_method_requested_indicator' => 'string',
        'tax_information_indicator' => 'string',
        'promotional_discount_information' => '\UPS\Rating\Rating\ShipmentPromotionalDiscountInformation',
        'delivery_time_information' => '\UPS\Rating\Rating\ShipmentDeliveryTimeInformation',
        'master_carton_indicator' => 'string',
        'wwe_shipment_indicator' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'origin_record_transaction_timestamp' => null,
        'shipper' => null,
        'ship_to' => null,
        'ship_from' => null,
        'alternate_delivery_address' => null,
        'shipment_indication_type' => null,
        'payment_details' => null,
        'frs_payment_information' => null,
        'freight_shipment_information' => null,
        'goods_not_in_free_circulation_indicator' => null,
        'service' => null,
        'num_of_pieces' => null,
        'shipment_total_weight' => null,
        'documents_only_indicator' => null,
        'package' => null,
        'shipment_service_options' => null,
        'shipment_rating_options' => null,
        'invoice_line_total' => null,
        'rating_method_requested_indicator' => null,
        'tax_information_indicator' => null,
        'promotional_discount_information' => null,
        'delivery_time_information' => null,
        'master_carton_indicator' => null,
        'wwe_shipment_indicator' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'origin_record_transaction_timestamp' => 'OriginRecordTransactionTimestamp',
        'shipper' => 'Shipper',
        'ship_to' => 'ShipTo',
        'ship_from' => 'ShipFrom',
        'alternate_delivery_address' => 'AlternateDeliveryAddress',
        'shipment_indication_type' => 'ShipmentIndicationType',
        'payment_details' => 'PaymentDetails',
        'frs_payment_information' => 'FRSPaymentInformation',
        'freight_shipment_information' => 'FreightShipmentInformation',
        'goods_not_in_free_circulation_indicator' => 'GoodsNotInFreeCirculationIndicator',
        'service' => 'Service',
        'num_of_pieces' => 'NumOfPieces',
        'shipment_total_weight' => 'ShipmentTotalWeight',
        'documents_only_indicator' => 'DocumentsOnlyIndicator',
        'package' => 'Package',
        'shipment_service_options' => 'ShipmentServiceOptions',
        'shipment_rating_options' => 'ShipmentRatingOptions',
        'invoice_line_total' => 'InvoiceLineTotal',
        'rating_method_requested_indicator' => 'RatingMethodRequestedIndicator',
        'tax_information_indicator' => 'TaxInformationIndicator',
        'promotional_discount_information' => 'PromotionalDiscountInformation',
        'delivery_time_information' => 'DeliveryTimeInformation',
        'master_carton_indicator' => 'MasterCartonIndicator',
        'wwe_shipment_indicator' => 'WWEShipmentIndicator'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'origin_record_transaction_timestamp' => 'setOriginRecordTransactionTimestamp',
        'shipper' => 'setShipper',
        'ship_to' => 'setShipTo',
        'ship_from' => 'setShipFrom',
        'alternate_delivery_address' => 'setAlternateDeliveryAddress',
        'shipment_indication_type' => 'setShipmentIndicationType',
        'payment_details' => 'setPaymentDetails',
        'frs_payment_information' => 'setFrsPaymentInformation',
        'freight_shipment_information' => 'setFreightShipmentInformation',
        'goods_not_in_free_circulation_indicator' => 'setGoodsNotInFreeCirculationIndicator',
        'service' => 'setService',
        'num_of_pieces' => 'setNumOfPieces',
        'shipment_total_weight' => 'setShipmentTotalWeight',
        'documents_only_indicator' => 'setDocumentsOnlyIndicator',
        'package' => 'setPackage',
        'shipment_service_options' => 'setShipmentServiceOptions',
        'shipment_rating_options' => 'setShipmentRatingOptions',
        'invoice_line_total' => 'setInvoiceLineTotal',
        'rating_method_requested_indicator' => 'setRatingMethodRequestedIndicator',
        'tax_information_indicator' => 'setTaxInformationIndicator',
        'promotional_discount_information' => 'setPromotionalDiscountInformation',
        'delivery_time_information' => 'setDeliveryTimeInformation',
        'master_carton_indicator' => 'setMasterCartonIndicator',
        'wwe_shipment_indicator' => 'setWweShipmentIndicator'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'origin_record_transaction_timestamp' => 'getOriginRecordTransactionTimestamp',
        'shipper' => 'getShipper',
        'ship_to' => 'getShipTo',
        'ship_from' => 'getShipFrom',
        'alternate_delivery_address' => 'getAlternateDeliveryAddress',
        'shipment_indication_type' => 'getShipmentIndicationType',
        'payment_details' => 'getPaymentDetails',
        'frs_payment_information' => 'getFrsPaymentInformation',
        'freight_shipment_information' => 'getFreightShipmentInformation',
        'goods_not_in_free_circulation_indicator' => 'getGoodsNotInFreeCirculationIndicator',
        'service' => 'getService',
        'num_of_pieces' => 'getNumOfPieces',
        'shipment_total_weight' => 'getShipmentTotalWeight',
        'documents_only_indicator' => 'getDocumentsOnlyIndicator',
        'package' => 'getPackage',
        'shipment_service_options' => 'getShipmentServiceOptions',
        'shipment_rating_options' => 'getShipmentRatingOptions',
        'invoice_line_total' => 'getInvoiceLineTotal',
        'rating_method_requested_indicator' => 'getRatingMethodRequestedIndicator',
        'tax_information_indicator' => 'getTaxInformationIndicator',
        'promotional_discount_information' => 'getPromotionalDiscountInformation',
        'delivery_time_information' => 'getDeliveryTimeInformation',
        'master_carton_indicator' => 'getMasterCartonIndicator',
        'wwe_shipment_indicator' => 'getWweShipmentIndicator'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['origin_record_transaction_timestamp'] = isset($data['origin_record_transaction_timestamp']) ? $data['origin_record_transaction_timestamp'] : null;
        $this->container['shipper'] = isset($data['shipper']) ? $data['shipper'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['alternate_delivery_address'] = isset($data['alternate_delivery_address']) ? $data['alternate_delivery_address'] : null;
        $this->container['shipment_indication_type'] = isset($data['shipment_indication_type']) ? $data['shipment_indication_type'] : null;
        $this->container['payment_details'] = isset($data['payment_details']) ? $data['payment_details'] : null;
        $this->container['frs_payment_information'] = isset($data['frs_payment_information']) ? $data['frs_payment_information'] : null;
        $this->container['freight_shipment_information'] = isset($data['freight_shipment_information']) ? $data['freight_shipment_information'] : null;
        $this->container['goods_not_in_free_circulation_indicator'] = isset($data['goods_not_in_free_circulation_indicator']) ? $data['goods_not_in_free_circulation_indicator'] : null;
        $this->container['service'] = isset($data['service']) ? $data['service'] : null;
        $this->container['num_of_pieces'] = isset($data['num_of_pieces']) ? $data['num_of_pieces'] : null;
        $this->container['shipment_total_weight'] = isset($data['shipment_total_weight']) ? $data['shipment_total_weight'] : null;
        $this->container['documents_only_indicator'] = isset($data['documents_only_indicator']) ? $data['documents_only_indicator'] : null;
        $this->container['package'] = isset($data['package']) ? $data['package'] : null;
        $this->container['shipment_service_options'] = isset($data['shipment_service_options']) ? $data['shipment_service_options'] : null;
        $this->container['shipment_rating_options'] = isset($data['shipment_rating_options']) ? $data['shipment_rating_options'] : null;
        $this->container['invoice_line_total'] = isset($data['invoice_line_total']) ? $data['invoice_line_total'] : null;
        $this->container['rating_method_requested_indicator'] = isset($data['rating_method_requested_indicator']) ? $data['rating_method_requested_indicator'] : null;
        $this->container['tax_information_indicator'] = isset($data['tax_information_indicator']) ? $data['tax_information_indicator'] : null;
        $this->container['promotional_discount_information'] = isset($data['promotional_discount_information']) ? $data['promotional_discount_information'] : null;
        $this->container['delivery_time_information'] = isset($data['delivery_time_information']) ? $data['delivery_time_information'] : null;
        $this->container['master_carton_indicator'] = isset($data['master_carton_indicator']) ? $data['master_carton_indicator'] : null;
        $this->container['wwe_shipment_indicator'] = isset($data['wwe_shipment_indicator']) ? $data['wwe_shipment_indicator'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shipper'] === null) {
            $invalidProperties[] = "'shipper' can't be null";
        }
        if ($this->container['ship_to'] === null) {
            $invalidProperties[] = "'ship_to' can't be null";
        }
        if ($this->container['package'] === null) {
            $invalidProperties[] = "'package' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets origin_record_transaction_timestamp
     *
     * @return string
     */
    public function getOriginRecordTransactionTimestamp()
    {
        return $this->container['origin_record_transaction_timestamp'];
    }

    /**
     * Sets origin_record_transaction_timestamp
     *
     * @param string $origin_record_transaction_timestamp The time that the request was made from the originating system. UTC time down to milliseconds. Example - 2016-07-14T12:01:33.999  Applicable only for HazMat request and with subversion greater than or equal to 1701.
     *
     * @return $this
     */
    public function setOriginRecordTransactionTimestamp($origin_record_transaction_timestamp)
    {
        $this->container['origin_record_transaction_timestamp'] = $origin_record_transaction_timestamp;

        return $this;
    }

    /**
     * Gets shipper
     *
     * @return \UPS\Rating\Rating\ShipmentShipper
     */
    public function getShipper()
    {
        return $this->container['shipper'];
    }

    /**
     * Sets shipper
     *
     * @param \UPS\Rating\Rating\ShipmentShipper $shipper shipper
     *
     * @return $this
     */
    public function setShipper($shipper)
    {
        $this->container['shipper'] = $shipper;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return \UPS\Rating\Rating\ShipmentShipTo
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param \UPS\Rating\Rating\ShipmentShipTo $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_from
     *
     * @return \UPS\Rating\Rating\ShipmentShipFrom
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from
     *
     * @param \UPS\Rating\Rating\ShipmentShipFrom $ship_from ship_from
     *
     * @return $this
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets alternate_delivery_address
     *
     * @return \UPS\Rating\Rating\ShipmentAlternateDeliveryAddress
     */
    public function getAlternateDeliveryAddress()
    {
        return $this->container['alternate_delivery_address'];
    }

    /**
     * Sets alternate_delivery_address
     *
     * @param \UPS\Rating\Rating\ShipmentAlternateDeliveryAddress $alternate_delivery_address alternate_delivery_address
     *
     * @return $this
     */
    public function setAlternateDeliveryAddress($alternate_delivery_address)
    {
        $this->container['alternate_delivery_address'] = $alternate_delivery_address;

        return $this;
    }

    /**
     * Gets shipment_indication_type
     *
     * @return \UPS\Rating\Rating\ShipmentShipmentIndicationType[]
     */
    public function getShipmentIndicationType()
    {
        return $this->container['shipment_indication_type'];
    }

    /**
     * Sets shipment_indication_type
     *
     * @param \UPS\Rating\Rating\ShipmentShipmentIndicationType[] $shipment_indication_type shipment_indication_type
     *
     * @return $this
     */
    public function setShipmentIndicationType($shipment_indication_type)
    {
        $this->container['shipment_indication_type'] = $shipment_indication_type;

        return $this;
    }

    /**
     * Gets payment_details
     *
     * @return \UPS\Rating\Rating\ShipmentPaymentDetails
     */
    public function getPaymentDetails()
    {
        return $this->container['payment_details'];
    }

    /**
     * Sets payment_details
     *
     * @param \UPS\Rating\Rating\ShipmentPaymentDetails $payment_details payment_details
     *
     * @return $this
     */
    public function setPaymentDetails($payment_details)
    {
        $this->container['payment_details'] = $payment_details;

        return $this;
    }

    /**
     * Gets frs_payment_information
     *
     * @return \UPS\Rating\Rating\ShipmentFRSPaymentInformation
     */
    public function getFrsPaymentInformation()
    {
        return $this->container['frs_payment_information'];
    }

    /**
     * Sets frs_payment_information
     *
     * @param \UPS\Rating\Rating\ShipmentFRSPaymentInformation $frs_payment_information frs_payment_information
     *
     * @return $this
     */
    public function setFrsPaymentInformation($frs_payment_information)
    {
        $this->container['frs_payment_information'] = $frs_payment_information;

        return $this;
    }

    /**
     * Gets freight_shipment_information
     *
     * @return \UPS\Rating\Rating\ShipmentFreightShipmentInformation
     */
    public function getFreightShipmentInformation()
    {
        return $this->container['freight_shipment_information'];
    }

    /**
     * Sets freight_shipment_information
     *
     * @param \UPS\Rating\Rating\ShipmentFreightShipmentInformation $freight_shipment_information freight_shipment_information
     *
     * @return $this
     */
    public function setFreightShipmentInformation($freight_shipment_information)
    {
        $this->container['freight_shipment_information'] = $freight_shipment_information;

        return $this;
    }

    /**
     * Gets goods_not_in_free_circulation_indicator
     *
     * @return string
     */
    public function getGoodsNotInFreeCirculationIndicator()
    {
        return $this->container['goods_not_in_free_circulation_indicator'];
    }

    /**
     * Sets goods_not_in_free_circulation_indicator
     *
     * @param string $goods_not_in_free_circulation_indicator Goods Not In Free Circulation indicator.  This is an empty tag, any value inside is ignored. This indicator is invalid for a package type of UPS Letter and DocumentsOnly.
     *
     * @return $this
     */
    public function setGoodsNotInFreeCirculationIndicator($goods_not_in_free_circulation_indicator)
    {
        $this->container['goods_not_in_free_circulation_indicator'] = $goods_not_in_free_circulation_indicator;

        return $this;
    }

    /**
     * Gets service
     *
     * @return \UPS\Rating\Rating\ShipmentService
     */
    public function getService()
    {
        return $this->container['service'];
    }

    /**
     * Sets service
     *
     * @param \UPS\Rating\Rating\ShipmentService $service service
     *
     * @return $this
     */
    public function setService($service)
    {
        $this->container['service'] = $service;

        return $this;
    }

    /**
     * Gets num_of_pieces
     *
     * @return string
     */
    public function getNumOfPieces()
    {
        return $this->container['num_of_pieces'];
    }

    /**
     * Sets num_of_pieces
     *
     * @param string $num_of_pieces Total number of pieces in all pallets. Required for UPS Worldwide Express Freight and UPS Worldwide Express Freight Midday shipments.
     *
     * @return $this
     */
    public function setNumOfPieces($num_of_pieces)
    {
        $this->container['num_of_pieces'] = $num_of_pieces;

        return $this;
    }

    /**
     * Gets shipment_total_weight
     *
     * @return \UPS\Rating\Rating\ShipmentShipmentTotalWeight
     */
    public function getShipmentTotalWeight()
    {
        return $this->container['shipment_total_weight'];
    }

    /**
     * Sets shipment_total_weight
     *
     * @param \UPS\Rating\Rating\ShipmentShipmentTotalWeight $shipment_total_weight shipment_total_weight
     *
     * @return $this
     */
    public function setShipmentTotalWeight($shipment_total_weight)
    {
        $this->container['shipment_total_weight'] = $shipment_total_weight;

        return $this;
    }

    /**
     * Gets documents_only_indicator
     *
     * @return string
     */
    public function getDocumentsOnlyIndicator()
    {
        return $this->container['documents_only_indicator'];
    }

    /**
     * Sets documents_only_indicator
     *
     * @param string $documents_only_indicator Valid values are Document and Non-document. If the indicator is present then the value is Document else Non-Document. Note: Not applicable for FRS rating  requests.  Empty Tag.
     *
     * @return $this
     */
    public function setDocumentsOnlyIndicator($documents_only_indicator)
    {
        $this->container['documents_only_indicator'] = $documents_only_indicator;

        return $this;
    }

    /**
     * Gets package
     *
     * @return \UPS\Rating\Rating\ShipmentPackage[]
     */
    public function getPackage()
    {
        return $this->container['package'];
    }

    /**
     * Sets package
     *
     * @param \UPS\Rating\Rating\ShipmentPackage[] $package package
     *
     * @return $this
     */
    public function setPackage($package)
    {
        $this->container['package'] = $package;

        return $this;
    }

    /**
     * Gets shipment_service_options
     *
     * @return \UPS\Rating\Rating\ShipmentShipmentServiceOptions
     */
    public function getShipmentServiceOptions()
    {
        return $this->container['shipment_service_options'];
    }

    /**
     * Sets shipment_service_options
     *
     * @param \UPS\Rating\Rating\ShipmentShipmentServiceOptions $shipment_service_options shipment_service_options
     *
     * @return $this
     */
    public function setShipmentServiceOptions($shipment_service_options)
    {
        $this->container['shipment_service_options'] = $shipment_service_options;

        return $this;
    }

    /**
     * Gets shipment_rating_options
     *
     * @return \UPS\Rating\Rating\ShipmentShipmentRatingOptions
     */
    public function getShipmentRatingOptions()
    {
        return $this->container['shipment_rating_options'];
    }

    /**
     * Sets shipment_rating_options
     *
     * @param \UPS\Rating\Rating\ShipmentShipmentRatingOptions $shipment_rating_options shipment_rating_options
     *
     * @return $this
     */
    public function setShipmentRatingOptions($shipment_rating_options)
    {
        $this->container['shipment_rating_options'] = $shipment_rating_options;

        return $this;
    }

    /**
     * Gets invoice_line_total
     *
     * @return \UPS\Rating\Rating\ShipmentInvoiceLineTotal
     */
    public function getInvoiceLineTotal()
    {
        return $this->container['invoice_line_total'];
    }

    /**
     * Sets invoice_line_total
     *
     * @param \UPS\Rating\Rating\ShipmentInvoiceLineTotal $invoice_line_total invoice_line_total
     *
     * @return $this
     */
    public function setInvoiceLineTotal($invoice_line_total)
    {
        $this->container['invoice_line_total'] = $invoice_line_total;

        return $this;
    }

    /**
     * Gets rating_method_requested_indicator
     *
     * @return string
     */
    public function getRatingMethodRequestedIndicator()
    {
        return $this->container['rating_method_requested_indicator'];
    }

    /**
     * Sets rating_method_requested_indicator
     *
     * @param string $rating_method_requested_indicator Presence/Absence Indicator. Any value inside is ignored. RatingMethodRequestedIndicator is an indicator. If present, Billable Weight Calculation method and Rating Method information would be returned in response.
     *
     * @return $this
     */
    public function setRatingMethodRequestedIndicator($rating_method_requested_indicator)
    {
        $this->container['rating_method_requested_indicator'] = $rating_method_requested_indicator;

        return $this;
    }

    /**
     * Gets tax_information_indicator
     *
     * @return string
     */
    public function getTaxInformationIndicator()
    {
        return $this->container['tax_information_indicator'];
    }

    /**
     * Sets tax_information_indicator
     *
     * @param string $tax_information_indicator Presence/Absence Indicator. Any value inside is ignored. TaxInformationIndicator is an indicator. The Tax related information includes any type of Taxes, corresponding Monetary Values, Total Charges with Taxes and disclaimers (if applicable) would be returned in response.  If present, any taxes that may be applicable to a shipment would be returned in response. If this indicator is requested with NegotiatedRatesIndicator, Tax related information, if applicable, would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @return $this
     */
    public function setTaxInformationIndicator($tax_information_indicator)
    {
        $this->container['tax_information_indicator'] = $tax_information_indicator;

        return $this;
    }

    /**
     * Gets promotional_discount_information
     *
     * @return \UPS\Rating\Rating\ShipmentPromotionalDiscountInformation
     */
    public function getPromotionalDiscountInformation()
    {
        return $this->container['promotional_discount_information'];
    }

    /**
     * Sets promotional_discount_information
     *
     * @param \UPS\Rating\Rating\ShipmentPromotionalDiscountInformation $promotional_discount_information promotional_discount_information
     *
     * @return $this
     */
    public function setPromotionalDiscountInformation($promotional_discount_information)
    {
        $this->container['promotional_discount_information'] = $promotional_discount_information;

        return $this;
    }

    /**
     * Gets delivery_time_information
     *
     * @return \UPS\Rating\Rating\ShipmentDeliveryTimeInformation
     */
    public function getDeliveryTimeInformation()
    {
        return $this->container['delivery_time_information'];
    }

    /**
     * Sets delivery_time_information
     *
     * @param \UPS\Rating\Rating\ShipmentDeliveryTimeInformation $delivery_time_information delivery_time_information
     *
     * @return $this
     */
    public function setDeliveryTimeInformation($delivery_time_information)
    {
        $this->container['delivery_time_information'] = $delivery_time_information;

        return $this;
    }

    /**
     * Gets master_carton_indicator
     *
     * @return string
     */
    public function getMasterCartonIndicator()
    {
        return $this->container['master_carton_indicator'];
    }

    /**
     * Sets master_carton_indicator
     *
     * @param string $master_carton_indicator Presence/Absence Indicator. Any value inside is ignored. MasterCartonIndicator is an indicator and presence implies that shipment is Master Carton type.  If present, the shipment will be rated as a Master Carton Type. If this indicator is requested with NegotiatedRatesIndicator, rates would be returned only for Negotiated Rates and not for Published Rates.
     *
     * @return $this
     */
    public function setMasterCartonIndicator($master_carton_indicator)
    {
        $this->container['master_carton_indicator'] = $master_carton_indicator;

        return $this;
    }

    /**
     * Gets wwe_shipment_indicator
     *
     * @return string
     */
    public function getWweShipmentIndicator()
    {
        return $this->container['wwe_shipment_indicator'];
    }

    /**
     * Sets wwe_shipment_indicator
     *
     * @param string $wwe_shipment_indicator Presence/Absence Indicator. Any value inside is ignored. WWEShipmentIndicator is an indicator and presence implies that WWE service details requested for RequestOption=Shop or  RequestOption=Shoptimeintransit  RequestOption=Shop or  RequestOption=Shoptimeintransit
     *
     * @return $this
     */
    public function setWweShipmentIndicator($wwe_shipment_indicator)
    {
        $this->container['wwe_shipment_indicator'] = $wwe_shipment_indicator;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}