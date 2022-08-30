# # BillingProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**billing_profile_id** | **string** | A UUID for a given BillingProfile object present in Reach. This can be used later to reference an existing consumer | [optional] [readonly]
**billing_profile_reference** | **string** | A unique merchant-supplied consumer identifier. If supplied, this can be used later to reference an existing consumer. | [optional]
**name** | **string** | Customer’s given name. |
**company** | **string** | Customer&#39;s company name. | [optional]
**email** | **string** | Customer’s email address |
**address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  |
**phone** | **string** | Customer&#39;s phone number. | [optional]
**birthdate** | **string** | Customer&#39;s birthdate (format yyyy-MM-dd). Required depending on the Country. | [optional]
**national_identifier** | **string** | National ID, such as SSN or CPF. Required depending on the Country. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
