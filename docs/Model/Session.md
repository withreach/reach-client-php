# # Session

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | Returned UUID representing the Session | [optional] [readonly]
**state** | **string** | Returned state of the Session. | [optional] [readonly]
**merchant_reference** | **string** | Unique identifier provided by merchant. |
**currency** | **string** | Three-character ISO-4217 currency code used to process the payment. |
**total_amount** | **float** | Sum of all item amounts, TaxAmount, ShippingDetails.ShippingAmount and ShippingDetails.DutyAmount, minus the total of all Discounts | [optional] [readonly]
**items** | [**\OpenAPI\Client\Model\Item[]**](Item.md) | List of items to be paid. At least one Item must be supplied. |
**auto_capture** | **bool** | Indicator used to determine if an Order is auto captured after authorization. |
**complete_url** | **string** | Merchant URL to redirect a user to upon completion at a third party payment processor. This may contain \&quot;{SessionId}\&quot; anywhere in the string to have the SessionId embedded in the url. |
**cancel_url** | **string** | Merchant URL to redirect a user to after cancelling on a third party payment processor. This may contain \&quot;{SessionId}\&quot; anywhere in the string to have the SessionId embedded in the url. |
**via_agent** | **bool** | Indicates that this Session is being made by an agent, and not the end consumer. If false or not present, the Session is assumed to be placed by the end consumer. | [optional]
**billing_profile_id** | **string** | Corresponds to the BillingProfileId returned in a BillingProfile. Can be passed in to reference an existing billing profile instead of creating a new one. Exactly one of BillingProfile, BillingProfileId or BillingprofileReference are required. | [optional]
**billing_profile_reference** | **string** | Merchant supplied reference that uniquely maps to a BillingProfile. Can be passed in to reference an existing BillingProfile. Exactly one of BillingProfile, BillingProfileId or BillingprofileReference are required. | [optional]
**billing_profile** | [**\OpenAPI\Client\Model\BillingProfile**](BillingProfile.md) |  | [optional]
**shipping_details** | [**\OpenAPI\Client\Model\ShippingDetails**](ShippingDetails.md) |  | [optional]
**tax_amount** | **float** | Taxes for the entire order. Currency is defined by parent object. | [optional]
**order** | [**\OpenAPI\Client\Model\Order**](Order.md) |  | [optional]
**discounts** | [**\OpenAPI\Client\Model\Discount[]**](Discount.md) |  | [optional]
**rate_offer_id** | **string** | The 36 character GUID for a guaranteed foreign exchange rate. If omitted, the rate will be determined at the time of settlement. | [optional]
**meta** | **object** | Any optional metadata to be included. Can be a simple reference ID or some complex object containing multiple values, as long as it is valid JSON. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
