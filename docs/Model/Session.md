# Session

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**session_id** | **string** | Returned UUID representing the Session | [optional] 
**state** | **string** | Returned state of the Session. | [optional] 
**merchant_reference** | **string** | Unique identifier provided by merchant. | 
**currency** | **string** | Three-character ISO-4217 currency code used to process the payment. | 
**total_amount** | **float** | Sum of all item amounts, TaxAmount, ShippingDetails.ShippingAmount and ShippingDetails.DutyAmount, minus the total of all Discounts | [optional] 
**items** | [**\Swagger\Client\Model\Item[]**](Item.md) | List of items to be paid. At least one Item must be supplied. | 
**auto_capture** | **bool** | Indicator used to determine if an Order is auto captured after authorization. | 
**complete_url** | **string** | Merchant URL to redirect a user to upon completion at a third party payment processor. This may contain \&quot;{SessionId}\&quot; anywhere in the string to have the SessionId embedded in the url. | 
**cancel_url** | **string** | Merchant URL to redirect a user to after cancelling on a third party payment processor. This may contain \&quot;{SessionId}\&quot; anywhere in the string to have the SessionId embedded in the url. | 
**via_agent** | **bool** | Indicates that this Session is being made by an agent, and not the end consumer. If false or not present, the Session is assumed to be placed by the end consumer. | [optional] 
**billing_profile_id** | **string** | Corresponds to the BillingProfileId returned in a BillingProfile. Can be passed in to reference an existing billing profile instead of creating a new one. Exactly one of BillingProfile, BillingProfileId or BillingprofileReference are required. | [optional] 
**billing_profile_reference** | **string** | Merchant supplied reference that uniquely maps to a BillingProfile. Can be passed in to reference an existing BillingProfile. Exactly one of BillingProfile, BillingProfileId or BillingprofileReference are required. | [optional] 
**billing_profile** | [**AllOfSessionBillingProfile**](AllOfSessionBillingProfile.md) | Full consumer billing information. Supplying this creates a new BillingProfile that can be referenced in future requests with either the supplied BillingProfileReference or the generated BillingProfileId. Exactly one of BillingProfile, BillingProfileId or BillingprofileReference are required. | [optional] 
**shipping_details** | [**AllOfSessionShippingDetails**](AllOfSessionShippingDetails.md) | Consumer shipping information. Required if the session is for physical goods. | [optional] 
**tax_amount** | **float** | Taxes for the entire order. Currency is defined by parent object. | [optional] 
**order** | [**AllOfSessionOrder**](AllOfSessionOrder.md) | Order information, returned when a session is completed. | [optional] 
**discounts** | [**\Swagger\Client\Model\Discount[]**](Discount.md) |  | [optional] 
**rate_offer_id** | **string** | The 36 character GUID for a guaranteed foreign exchange rate. If omitted, the rate will be determined at the time of settlement. | [optional] 
**meta** | [**\Swagger\Client\Model\Meta**](Meta.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

