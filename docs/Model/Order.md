# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | UUID identifying the individual Order. | [readonly]
**state** | **string** | Order state. See: https://docs.withreach.com/docs/states-and-events | [readonly]
**merchant_reference** | **string** | Unique identifier provided by merchant. |
**billing_profile** | [**\OpenAPI\Client\Model\BillingProfile**](BillingProfile.md) |  | [optional]
**billing_profile_id** | **string** | Corresponds to the BillingProfileId returned in a BillingProfile. Can be passed in to reference an existing billing profile instead of creating a new one. Exactly one of BillingProfile, BillingProfileId or BillingprofileReference are required. | [optional]
**billing_profile_reference** | **string** | Merchant supplied reference that uniquely maps to a BillingProfile. Can be passed in to reference an existing BillingProfile. Exactly one of BillingProfile, BillingProfileId or BillingprofileReference are required. | [optional]
**currency** | **string** | Three-character ISO-4217 currency code used to process the payment. | [optional]
**items** | [**\OpenAPI\Client\Model\Item[]**](Item.md) | List of items to be paid. At least one Item must be supplied in requests. The sum total of the item amounts will be added to the TotalAmount | [optional]
**payment** | [**\OpenAPI\Client\Model\Payment**](Payment.md) |  | [optional]
**contract_id** | **string** | Reach-generated ID of an existing contract. Can be supplied in lieu of a Payment object. Will be returned in the response if OpenContract is set to true. | [optional]
**device_fingerprint** | **string** | Device fingerprint - see https://docs.withreach.com/reference/fingerprint-1 | [optional]
**discounts** | [**\OpenAPI\Client\Model\Discount[]**](Discount.md) | List of discounts. The sum of the discounts amounts will be subtracted from the TotalAmount | [optional]
**shipping_details** | [**\OpenAPI\Client\Model\ShippingDetails**](ShippingDetails.md) |  | [optional]
**tax_amount** | **float** | Tax to be applied to the order. In the consumer currency, max precision of 2 digits. TaxAmount will be added to the TotalAmount. | [optional]
**via_agent** | **bool** | Indicates that this order is being made by an agent, and not the end consumer. If false or not present, the order is assumed to be placed by the end consumer. | [optional]
**accept_liability** | **bool** | If true, the merchant accepts financial liability for this order. | [optional]
**auto_capture** | **bool** | If true or the payment method used by the consumer does not support pre-authorization, the payment will be completed. If false or not present, and the payment method supports pre-authorization, the order will be left in the PaymentAuthorized state and the merchant must capture the order using a capture request. | [optional]
**open_contract** | **bool** | If true, a contract (used for recurring billing, subscriptions, stored payment options, etc.) will be opened if possible. If false or not present, the order will not open a contract. | [optional]
**meta** | **object** | Any optional metadata to be included. Can be a simple reference ID or some complex object containing multiple values, as long as it is valid JSON. | [optional]
**under_review** | **bool** | This will be returned as true if a fraud review is in progress for the order. Payment cannot be processed until the review has been completed. | [optional] [readonly]
**chargeback** | **bool** | This will be returned as true if a chargeback has been issued against the order. An outstanding chargeback disables the ability to submit a refund against the order. | [optional] [readonly]
**reason** | **string** | Gives a reason for an order to be in a given state. | [optional] [readonly]
**expiry** | **string** | If the order was created with Capture false, and the payment is authorized, the RFC 3339 time at which this order expires. If further authentication is required, this is the time by which that authentication must be completed. | [optional] [readonly]
**action** | [**\OpenAPI\Client\Model\Action**](Action.md) |  | [optional]
**times** | [**\OpenAPI\Client\Model\Times**](Times.md) |  | [optional]
**admin_url** | **string** | A link to this order in the Reach admin app. You must have valid credentials to view | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
