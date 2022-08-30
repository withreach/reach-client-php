<?php
/**
 * Display
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Reach's Drop-In API
 *
 * API definition for Reach's Drop-In API's. This version of the OpenAPI is intended for use with code generation tools.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Display Class Doc Comment
 *
 * @category Class
 * @description A freeform JSON object which, in the context of the specified request, gives the necessary information for a consumer to proceed. See https://docs.withreach.com/docs/display-parameters.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Display implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Display';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'account_holder' => 'string',
        'account_number' => 'string',
        'bank_name' => 'string',
        'city' => 'string',
        'iban' => 'string',
        'payment_reference' => 'string',
        'swift_code' => 'string',
        'extra_bank_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'account_holder' => null,
        'account_number' => null,
        'bank_name' => null,
        'city' => null,
        'iban' => null,
        'payment_reference' => null,
        'swift_code' => null,
        'extra_bank_data' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'account_holder' => 'AccountHolder',
        'account_number' => 'AccountNumber',
        'bank_name' => 'BankName',
        'city' => 'City',
        'iban' => 'Iban',
        'payment_reference' => 'PaymentReference',
        'swift_code' => 'SwiftCode',
        'extra_bank_data' => 'ExtraBankData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_holder' => 'setAccountHolder',
        'account_number' => 'setAccountNumber',
        'bank_name' => 'setBankName',
        'city' => 'setCity',
        'iban' => 'setIban',
        'payment_reference' => 'setPaymentReference',
        'swift_code' => 'setSwiftCode',
        'extra_bank_data' => 'setExtraBankData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_holder' => 'getAccountHolder',
        'account_number' => 'getAccountNumber',
        'bank_name' => 'getBankName',
        'city' => 'getCity',
        'iban' => 'getIban',
        'payment_reference' => 'getPaymentReference',
        'swift_code' => 'getSwiftCode',
        'extra_bank_data' => 'getExtraBankData'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['account_holder'] = $data['account_holder'] ?? null;
        $this->container['account_number'] = $data['account_number'] ?? null;
        $this->container['bank_name'] = $data['bank_name'] ?? null;
        $this->container['city'] = $data['city'] ?? null;
        $this->container['iban'] = $data['iban'] ?? null;
        $this->container['payment_reference'] = $data['payment_reference'] ?? null;
        $this->container['swift_code'] = $data['swift_code'] ?? null;
        $this->container['extra_bank_data'] = $data['extra_bank_data'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets account_holder
     *
     * @return string|null
     */
    public function getAccountHolder()
    {
        return $this->container['account_holder'];
    }

    /**
     * Sets account_holder
     *
     * @param string|null $account_holder account_holder
     *
     * @return self
     */
    public function setAccountHolder($account_holder)
    {
        $this->container['account_holder'] = $account_holder;

        return $this;
    }

    /**
     * Gets account_number
     *
     * @return string|null
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     *
     * @param string|null $account_number account_number
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string|null
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string|null $bank_name bank_name
     *
     * @return self
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string|null
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string|null $iban iban
     *
     * @return self
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets payment_reference
     *
     * @return string|null
     */
    public function getPaymentReference()
    {
        return $this->container['payment_reference'];
    }

    /**
     * Sets payment_reference
     *
     * @param string|null $payment_reference payment_reference
     *
     * @return self
     */
    public function setPaymentReference($payment_reference)
    {
        $this->container['payment_reference'] = $payment_reference;

        return $this;
    }

    /**
     * Gets swift_code
     *
     * @return string|null
     */
    public function getSwiftCode()
    {
        return $this->container['swift_code'];
    }

    /**
     * Sets swift_code
     *
     * @param string|null $swift_code swift_code
     *
     * @return self
     */
    public function setSwiftCode($swift_code)
    {
        $this->container['swift_code'] = $swift_code;

        return $this;
    }

    /**
     * Gets extra_bank_data
     *
     * @return string|null
     */
    public function getExtraBankData()
    {
        return $this->container['extra_bank_data'];
    }

    /**
     * Sets extra_bank_data
     *
     * @param string|null $extra_bank_data extra_bank_data
     *
     * @return self
     */
    public function setExtraBankData($extra_bank_data)
    {
        $this->container['extra_bank_data'] = $extra_bank_data;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


