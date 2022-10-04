# OpenAPI\Client\RatesApi

All URIs are relative to https://api.sandbox.withreach.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getRate()**](RatesApi.md#getRate) | **GET** /v2.21/getRate | Fetches information about a single rate offer. This will return information about the rate offer so long as it exists, even if it has expired.
[**getRates()**](RatesApi.md#getRates) | **GET** /v2.21/getRates | Fetches the list of current foreign exchange rate offers that are available to the merchant.


## `getRate()`

```php
getRate($merchant_id, $rate_offer_id): \OpenAPI\Client\Model\RateOffer
```

Fetches information about a single rate offer. This will return information about the rate offer so long as it exists, even if it has expired.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 'merchant_id_example'; // string | The 36 character UUID which identifies the merchant to the Reach system.
$rate_offer_id = 'rate_offer_id_example'; // string | A Reach rate offer ID for the merchant.

try {
    $result = $apiInstance->getRate($merchant_id, $rate_offer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->getRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **string**| The 36 character UUID which identifies the merchant to the Reach system. |
 **rate_offer_id** | **string**| A Reach rate offer ID for the merchant. |

### Return type

[**\OpenAPI\Client\Model\RateOffer**](../Model/RateOffer.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRates()`

```php
getRates($merchant_id): \OpenAPI\Client\Model\RateOffers
```

Fetches the list of current foreign exchange rate offers that are available to the merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new OpenAPI\Client\Api\RatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchant_id = 'merchant_id_example'; // string | The 36 character UUID which identifies the merchant to the Reach system.

try {
    $result = $apiInstance->getRates($merchant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RatesApi->getRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_id** | **string**| The 36 character UUID which identifies the merchant to the Reach system. |

### Return type

[**\OpenAPI\Client\Model\RateOffers**](../Model/RateOffers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
