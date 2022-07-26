# Swagger\Client\SessionApi

All URIs are relative to *https://api.sandbox.withreach.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelSession**](SessionApi.md#cancelsession) | **DELETE** /v1/session/{SessionId}/cancel | Cancel a non-final Session
[**createSession**](SessionApi.md#createsession) | **POST** /v1/session | Create a new Session
[**retrieveSession**](SessionApi.md#retrievesession) | **GET** /v1/session/{SessionId} | Retrieve a Session
[**updateSession**](SessionApi.md#updatesession) | **PUT** /v1/session/{SessionId} | Update a session.

# **cancelSession**
> cancelSession($session_id)

Cancel a non-final Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Session ID to be cancelled.

try {
    $apiInstance->cancelSession($session_id);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->cancelSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | [**string**](../Model/.md)| Session ID to be cancelled. |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSession**
> \Swagger\Client\Model\Session createSession($body)

Create a new Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Session(); // \Swagger\Client\Model\Session | Session object that needs to be created.

try {
    $result = $apiInstance->createSession($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->createSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Session**](../Model/Session.md)| Session object that needs to be created. |

### Return type

[**\Swagger\Client\Model\Session**](../Model/Session.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveSession**
> \Swagger\Client\Model\Session retrieveSession($session_id)

Retrieve a Session

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Session ID to be retrieved.

try {
    $result = $apiInstance->retrieveSession($session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->retrieveSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **session_id** | [**string**](../Model/.md)| Session ID to be retrieved. |

### Return type

[**\Swagger\Client\Model\Session**](../Model/Session.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSession**
> \Swagger\Client\Model\Session updateSession($body, $session_id)

Update a session.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Session(); // \Swagger\Client\Model\Session | Session object that needs to be created.
$session_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Session ID of the session to be updated

try {
    $result = $apiInstance->updateSession($body, $session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SessionApi->updateSession: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Session**](../Model/Session.md)| Session object that needs to be created. |
 **session_id** | [**string**](../Model/.md)| Session ID of the session to be updated |

### Return type

[**\Swagger\Client\Model\Session**](../Model/Session.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

