# # Payment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Payment classification | [optional]
**method** | **string** | Specific payment method as returned in Name of getPaymentMethods. See: https://docs.withreach.com/reference/getpaymentmethods | [optional]
**return_url** | **string** | Merchant URL to redirect a user to upon completion at a third party payment processor or a 3DS challenge. This may contain \&quot;{SessionId}\&quot; anywhere in the string to have the SessionId embedded in the url. | [optional]
**online** | [**\OpenAPI\Client\Model\Online**](Online.md) |  | [optional]
**card** | [**\OpenAPI\Client\Model\Card**](Card.md) |  | [optional]
**offline** | **object** | Offline payment information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
