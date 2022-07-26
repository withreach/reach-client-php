# Times

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | **string** | The RFC 3339 timestamp at which the order was created. | [optional] 
**authorized** | **string** | The RFC 3339 timestamp at which the order’s payment was authorized. This will be null if the payment has not yet been authorized or the payment method used for the order does not support pre-authorization (eg. Boleto). | [optional] 
**processed** | **string** | The RFC 3339 timestamp at which the order&#x27;s payment was processed. This will be null if the order&#x27;s payment has not been processed yet or has failed to be processed. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

