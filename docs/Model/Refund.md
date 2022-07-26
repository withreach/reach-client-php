# Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**refund_id** | **string** | Reach-generated unique id of a refund | [optional] 
**amount** | **float** | Amount of the refund. Must be at most the total value of the original order, minus any other refunds. | [optional] 
**state** | **string** | Refund state. See: https://docs.withreach.com/docs/states-and-events#refund-states | [optional] 
**refund_reference** | **string** | A merchant-supplied reference ID. This must be unique within the order for the given refund | [optional] 
**times** | [**AllOfRefundTimes**](AllOfRefundTimes.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

