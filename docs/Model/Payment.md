# Payment

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Payment classification | [optional] 
**method** | **string** | Specific payment method as returned in Name of getPaymentMethods. See: https://docs.withreach.com/reference/getpaymentmethods | [optional] 
**online** | [**AllOfPaymentOnline**](AllOfPaymentOnline.md) | Represents online payment methods, such as Paypal or Klarna. Present if Payment.Type is ONLINE, otherwise absent. | [optional] 
**card** | [**AllOfPaymentCard**](AllOfPaymentCard.md) | Represents card payment methods, such as Visa or Mastercard. Present if Payment.Type is CARD, otherwise absent. | [optional] 
**offline** | [**AllOfPaymentOffline**](AllOfPaymentOffline.md) | Represents offline payment methods, such as Bank Transfers. Present if Payment.Type is OFFLINE, otherwise absent. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

