# OpenAPI\Client\OrderApi

All URIs are relative to https://api.sandbox.withreach.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelOrder()**](OrderApi.md#cancelOrder) | **DELETE** /v1/orders/{OrderId}/cancel | Cancel an Order.
[**captureOrder()**](OrderApi.md#captureOrder) | **POST** /v1/orders/{OrderId}/capture | Capture an Order.
[**createOrder()**](OrderApi.md#createOrder) | **POST** /v1/orders | Create a new order
[**createRefund()**](OrderApi.md#createRefund) | **POST** /v1/orders/{OrderId}/refunds | Issue a refund against an order
[**retrieveOrder()**](OrderApi.md#retrieveOrder) | **GET** /v1/orders/{OrderId} | Retrieve an Order.


## `cancelOrder()`

```php
cancelOrder($order_id)
```

Cancel an Order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = cc7236aa-d11b-436c-a29c-d26cecadc847; // string | Order ID to be cancelled.

try {
    $apiInstance->cancelOrder($order_id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->cancelOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID to be cancelled. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `captureOrder()`

```php
captureOrder($order_id): \OpenAPI\Client\Model\CaptureResultResource
```

Capture an Order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = cc7236aa-d11b-436c-a29c-d26cecadc847; // string | Order ID to be captured.

try {
    $result = $apiInstance->captureOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->captureOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID to be captured. |

### Return type

[**\OpenAPI\Client\Model\CaptureResultResource**](../Model/CaptureResultResource.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($order): \OpenAPI\Client\Model\Order
```

Create a new order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order = {"SessionId":"c47fd55e-f6ca-43df-b45e-77d757755e27","MerchantReference":"SomeReference","DeviceFingerprint":"b16f631b-931f-4bfb-adb4-402f94c3e49c","Currency":"EUR","Items":[{"Name":"Item 1","Amount":1,"Quantity":1},{"Name":"Item 2","Amount":2.0,"Quantity":2}],"Discounts":[{"Name":"Discount 1","Amount":3.0}],"ShippingDetails":{"ShippingAmount":4.05,"DutyAmount":5.05,"Name":"Shipping Name","Email":"ship@email.com","Phone":"1234567890","Address":{"Street":"shipping street","City":"shipping city","Region":"shipping region","Country":"CA","Postcode":"H0H0H0"}},"TaxAmount":6.06,"BillingProfile":{"BillingProfileReference":"YourUniqueReference","Name":"Margery Kershaw","Email":"margery@email.com","Phone":"9876543210","Birthdate":"1980-01-02","Address":{"Street":"42 Pinnacles Lane","City":"San Jose","Region":"CA","Country":"US","Postcode":"90210"}},"ViaAgent":true,"AcceptLiability":true,"AutoCapture":true,"OpenContract":true,"NotifyUrl":"http://url.notify","Meta":{"field":"value","AnotherField":"Some other value"},"Payment":{"Type":"CARD","Method":"VISA","Card":{"StashId":"8d12c2db-ed2f-4e89-b378-1","ReturnUrl":"http://url.return"}}}; // \OpenAPI\Client\Model\Order | Order to be created

try {
    $result = $apiInstance->createOrder($order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order** | [**\OpenAPI\Client\Model\Order**](../Model/Order.md)| Order to be created |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRefund()`

```php
createRefund($order_id, $refund): \OpenAPI\Client\Model\Refund
```

Issue a refund against an order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = cc7236aa-d11b-436c-a29c-d26cecadc847; // string | Order ID to issue a refund against.
$refund = {"RefundReference":"YourUniqueReference","Amount":1.23}; // \OpenAPI\Client\Model\Refund | Refund to be issued

try {
    $result = $apiInstance->createRefund($order_id, $refund);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->createRefund: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID to issue a refund against. |
 **refund** | [**\OpenAPI\Client\Model\Refund**](../Model/Refund.md)| Refund to be issued | [optional]

### Return type

[**\OpenAPI\Client\Model\Refund**](../Model/Refund.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveOrder()`

```php
retrieveOrder($order_id): \OpenAPI\Client\Model\Order
```

Retrieve an Order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_id = cc7236aa-d11b-436c-a29c-d26cecadc847; // string | Order ID to be retrieved.

try {
    $result = $apiInstance->retrieveOrder($order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->retrieveOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_id** | **string**| Order ID to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\Order**](../Model/Order.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
