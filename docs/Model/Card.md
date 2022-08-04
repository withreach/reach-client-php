# Card

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stash_id** | **string** | Details of a card payment returned from a stash call. See: https://docs.withreach.com/docs/stash | [optional] 
**return_url** | **string** | Merchant URL to redirect a user to upon completion of a 3DS Challenge. This may contain \&quot;{SessionId}\&quot; anywhere in the string to have the SessionId embedded in the url. | [optional] 
**bin** | **string** | First 6 digits of a card number. Used for display purposes | [optional] 
**last_four** | **string** | Last 4 digits of a card number. Used for display purposes. | [optional] 
**expiry** | [**\Swagger\Client\Model\Expiry**](Expiry.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

