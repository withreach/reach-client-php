# OpenAPI\Client\SessionApi

All URIs are relative to https://api.sandbox.withreach.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelSession()**](SessionApi.md#cancelSession) | **DELETE** /v1/session/{SessionId}/cancel | Cancel a non-final Session
[**createSession()**](SessionApi.md#createSession) | **POST** /v1/session | Create a new Session
[**retrieveSession()**](SessionApi.md#retrieveSession) | **GET** /v1/session/{SessionId} | Retrieve a Session
[**updateSession()**](SessionApi.md#updateSession) | **PUT** /v1/session/{SessionId} | Update a session.


## `cancelSession()`

```php
cancelSession($session_id)
```

Cancel a non-final Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = f04c2d83-11fa-405b-b6c3-c74559fd8e61; // string | Session ID to be cancelled.

try {
    $apiInstance->cancelSession($session_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->cancelSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| Session ID to be cancelled. |

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

## `createSession()`

```php
createSession($session): \OpenAPI\Client\Model\Session
```

Create a new Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session = {"MerchantReference":"b14e4557-accb-a829-b829-c21234175467","Currency":"CAD","Items":[{"Name":"Item 1","Amount":23,"Quantity":1},{"Name":"Item 2","Amount":10.5,"Quantity":1},{"Name":"Item 3","Amount":5,"Quantity":1}],"BillingProfile":{"Name":"First Last","Email":"email@example.org","Phone":"4031231234","Birthdate":"1999-12-31","Address":{"Street":"123 Street","City":"City","Region":"AB","Country":"CA","Postcode":"X0X0X0"}},"ShippingDetails":{"ShippingAmount":20.51,"DutyAmount":1.11,"Name":"First Last","Email":"email@example.org","Phone":"4031231234","Address":{"Street":"123 Street","City":"City","Region":"AB","Country":"AR","Postcode":"X0X0X0"}},"TaxAmount":1.23,"AutoCapture":true,"CompleteUrl":"https://example.org/return/{SessionId}","CancelUrl":"https://example.org/return/{SessionId}","Discounts":[{"Name":"Discount descriptor","Amount":4.56}]}; // \OpenAPI\Client\Model\Session | Session object that needs to be created.

try {
    $result = $apiInstance->createSession($session);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->createSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session** | [**\OpenAPI\Client\Model\Session**](../Model/Session.md)| Session object that needs to be created. |

### Return type

[**\OpenAPI\Client\Model\Session**](../Model/Session.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retrieveSession()`

```php
retrieveSession($session_id): \OpenAPI\Client\Model\Session
```

Retrieve a Session

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = f04c2d83-11fa-405b-b6c3-c74559fd8e61; // string | Session ID to be retrieved.

try {
    $result = $apiInstance->retrieveSession($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->retrieveSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| Session ID to be retrieved. |

### Return type

[**\OpenAPI\Client\Model\Session**](../Model/Session.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSession()`

```php
updateSession($session_id, $session): \OpenAPI\Client\Model\Session
```

Update a session.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = f04c2d83-11fa-405b-b6c3-c74559fd8e61; // string | Session ID of the session to be updated
$session = {"MerchantReference":"b14e4557-accb-a829-b829-c21234175467","Currency":"CAD","Items":[{"Name":"Item 1","Amount":23,"Quantity":1},{"Name":"Item 2","Amount":10.5,"Quantity":1},{"Name":"Item 3","Amount":5,"Quantity":1}],"BillingProfile":{"Name":"First Last","Email":"email@example.org","Phone":"4031231234","Birthdate":"1999-12-31","Address":{"Street":"123 Street","City":"City","Region":"AB","Country":"CA","Postcode":"X0X0X0"}},"ShippingDetails":{"ShippingAmount":20.51,"DutyAmount":1.11,"Name":"First Last","Email":"email@example.org","Phone":"4031231234","Address":{"Street":"123 Street","City":"City","Region":"AB","Country":"AR","Postcode":"X0X0X0"}},"TaxAmount":1.23,"AutoCapture":true,"CompleteUrl":"https://example.org/return/{SessionId}","CancelUrl":"https://example.org/return/{SessionId}","Discounts":[{"Name":"Discount descriptor","Amount":4.56}],"AllowContract":true,"OpenContract":false}; // \OpenAPI\Client\Model\Session | Session object that needs to be created.

try {
    $result = $apiInstance->updateSession($session_id, $session);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->updateSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | **string**| Session ID of the session to be updated |
 **session** | [**\OpenAPI\Client\Model\Session**](../Model/Session.md)| Session object that needs to be created. |

### Return type

[**\OpenAPI\Client\Model\Session**](../Model/Session.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
