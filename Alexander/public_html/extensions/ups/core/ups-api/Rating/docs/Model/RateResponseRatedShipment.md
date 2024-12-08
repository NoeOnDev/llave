# RateResponseRatedShipment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**disclaimer** | [**\UPS\Rating\Rating\RatedShipmentDisclaimer[]**](RatedShipmentDisclaimer.md) | Disclaimer is used to provide more information to the shipper regarding the processed shipment. It is used to notify the shipper about possible taxes and duties that might have been added or might apply to the shipment. Refer to the Appendix for various disclaimers. This field may be returned only if TaxInformationIndicator is present in the request.  **NOTE:** For versions &gt;&#x3D; v2403, this element will always be returned as an array. For requests using versions &lt; v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1. | [optional] 
**service** | [**\UPS\Rating\Rating\RatedShipmentService**](RatedShipmentService.md) |  | 
**rate_chart** | **string** | Rate Type with which Shipment is rated. Possible RateChart values for different regions will be:  US 48 origin: - 1 – Daily Rates - 3 – Standard List Rates - 4 – Retail Rates.  Alaska/Hawaii origin: - 1 – Daily Rates - 3 – Standard List Rates - 4 – Retail Rates.  All Other origins: - 1 – Rates - 5 - Regional Rates - 6 - General List Rates. - 3 and 4 do not apply | [optional] 
**rated_shipment_alert** | [**\UPS\Rating\Rating\RatedShipmentRatedShipmentAlert[]**](RatedShipmentRatedShipmentAlert.md) | Rated Shipment Alert container. There can be zero to many RatedShipmentAlert containers with code and description.  **NOTE:** For versions &gt;&#x3D; v2403, this element will always be returned as an array. For requests using versions &lt; v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1. | [optional] 
**billable_weight_calculation_method** | **string** | Indicates whether the billable weight calculation method is utilized at the package or shipment level.  This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 &#x3D; Shipment Billable Weight02 &#x3D; Package Billable Weight | [optional] 
**rating_method** | **string** | Indicates whether the Shipment was rated at the shipment-level or the package-level. This information will be returned only if RatingMethodRequestedIndicator is present in the request.  Possible values:01 &#x3D; Shipment level02 &#x3D; Package level | [optional] 
**billing_weight** | [**\UPS\Rating\Rating\RatedShipmentBillingWeight**](RatedShipmentBillingWeight.md) |  | 
**transportation_charges** | [**\UPS\Rating\Rating\RatedShipmentTransportationCharges**](RatedShipmentTransportationCharges.md) |  | 
**base_service_charge** | [**\UPS\Rating\Rating\RatedShipmentBaseServiceCharge**](RatedShipmentBaseServiceCharge.md) |  | [optional] 
**itemized_charges** | [**\UPS\Rating\Rating\RatedShipmentItemizedCharges[]**](RatedShipmentItemizedCharges.md) | Itemized Charges are returned only when the subversion element is present and greater than or equal to &#x27;1601&#x27;. These charges would be returned only when subversion is greater than or equal to 1601.  **NOTE:** For versions &gt;&#x3D; v2403, this element will always be returned as an array. For requests using versions &lt; v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1. | [optional] 
**frs_shipment_data** | [**\UPS\Rating\Rating\RatedShipmentFRSShipmentData**](RatedShipmentFRSShipmentData.md) |  | [optional] 
**service_options_charges** | [**\UPS\Rating\Rating\RatedShipmentServiceOptionsCharges**](RatedShipmentServiceOptionsCharges.md) |  | 
**tax_charges** | [**\UPS\Rating\Rating\RatedShipmentTaxCharges[]**](RatedShipmentTaxCharges.md) | TaxCharges container are returned only when TaxInformationIndicator is present in request and when Negotiated Rates are not applicable. TaxCharges container contains Tax information for a given shipment.  **NOTE:** For versions &gt;&#x3D; v2403, this element will always be returned as an array. For requests using versions &lt; v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1. | [optional] 
**total_charges** | [**\UPS\Rating\Rating\RatedShipmentTotalCharges**](RatedShipmentTotalCharges.md) |  | 
**total_charges_with_taxes** | [**\UPS\Rating\Rating\RatedShipmentTotalChargesWithTaxes**](RatedShipmentTotalChargesWithTaxes.md) |  | [optional] 
**negotiated_rate_charges** | [**\UPS\Rating\Rating\RatedShipmentNegotiatedRateCharges**](RatedShipmentNegotiatedRateCharges.md) |  | [optional] 
**rated_package** | [**\UPS\Rating\Rating\RatedShipmentRatedPackage[]**](RatedShipmentRatedPackage.md) | Rated Package Container.  **NOTE:** For versions &gt;&#x3D; v2403, this element will always be returned as an array. For requests using versions &lt; v2403, this element will be returned as an array if there is more than one object and a single object if there is only 1. | 
**time_in_transit** | [**\UPS\Rating\Rating\RatedShipmentTimeInTransit**](RatedShipmentTimeInTransit.md) |  | [optional] 
**scheduled_delivery_date** | **string** | The rated shipments scheduled delivery date, ScheduledDeliveryDate returned only when Subversion of 2205 was sent in the request and the customer has the specific contract. | [optional] 
**roar_rated_indicator** | **string** | Informational only | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
