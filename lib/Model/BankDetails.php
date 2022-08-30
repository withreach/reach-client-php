<?php
/**
 * BankDetails
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
 * BankDetails Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BankDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankDetails';

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
        'country' => 'string',
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
        'country' => null,
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
        'country' => 'Country',
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
        'country' => 'setCountry',
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
        'country' => 'getCountry',
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
        $this->container['country'] = $data['country'] ?? null;
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

        if (!is_null($this->container['account_holder']) && (mb_strlen($this->container['account_holder']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_holder', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['account_number']) && (mb_strlen($this->container['account_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'account_number', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['bank_name']) && (mb_strlen($this->container['bank_name']) < 1)) {
            $invalidProperties[] = "invalid value for 'bank_name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) < 1)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['country']) && (mb_strlen($this->container['country']) < 1)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['iban']) && (mb_strlen($this->container['iban']) < 1)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['payment_reference']) && (mb_strlen($this->container['payment_reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'payment_reference', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['swift_code']) && (mb_strlen($this->container['swift_code']) < 1)) {
            $invalidProperties[] = "invalid value for 'swift_code', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['extra_bank_data']) && (mb_strlen($this->container['extra_bank_data']) < 1)) {
            $invalidProperties[] = "invalid value for 'extra_bank_data', the character length must be bigger than or equal to 1.";
        }

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
     * @param string|null $account_holder The name of the receiving account holder, if available
     *
     * @return self
     */
    public function setAccountHolder($account_holder)
    {

        if (!is_null($account_holder) && (mb_strlen($account_holder) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_holder when calling BankDetails., must be bigger than or equal to 1.');
        }

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
     * @param string|null $account_number The account number receiving the payment
     *
     * @return self
     */
    public function setAccountNumber($account_number)
    {

        if (!is_null($account_number) && (mb_strlen($account_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $account_number when calling BankDetails., must be bigger than or equal to 1.');
        }

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
     * @param string|null $bank_name The name of the bank receiving the payment
     *
     * @return self
     */
    public function setBankName($bank_name)
    {

        if (!is_null($bank_name) && (mb_strlen($bank_name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $bank_name when calling BankDetails., must be bigger than or equal to 1.');
        }

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
     * @param string|null $city City of processing bank
     *
     * @return self
     */
    public function setCity($city)
    {

        if (!is_null($city) && (mb_strlen($city) < 1)) {
            throw new \InvalidArgumentException('invalid length for $city when calling BankDetails., must be bigger than or equal to 1.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country of processing bank
     *
     * @return self
     */
    public function setCountry($country)
    {

        if (!is_null($country) && (mb_strlen($country) < 1)) {
            throw new \InvalidArgumentException('invalid length for $country when calling BankDetails., must be bigger than or equal to 1.');
        }

        $this->container['country'] = $country;

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
     * @param string|null $iban International Bank Account Number
     *
     * @return self
     */
    public function setIban($iban)
    {

        if (!is_null($iban) && (mb_strlen($iban) < 1)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling BankDetails., must be bigger than or equal to 1.');
        }

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
     * @param string|null $payment_reference The merchant order number
     *
     * @return self
     */
    public function setPaymentReference($payment_reference)
    {

        if (!is_null($payment_reference) && (mb_strlen($payment_reference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $payment_reference when calling BankDetails., must be bigger than or equal to 1.');
        }

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
     * @param string|null $swift_code The unique bank identifier
     *
     * @return self
     */
    public function setSwiftCode($swift_code)
    {

        if (!is_null($swift_code) && (mb_strlen($swift_code) < 1)) {
            throw new \InvalidArgumentException('invalid length for $swift_code when calling BankDetails., must be bigger than or equal to 1.');
        }

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
     * @param string|null $extra_bank_data Country-specific bank information (eg. ABA)
     *
     * @return self
     */
    public function setExtraBankData($extra_bank_data)
    {

        if (!is_null($extra_bank_data) && (mb_strlen($extra_bank_data) < 1)) {
            throw new \InvalidArgumentException('invalid length for $extra_bank_data when calling BankDetails., must be bigger than or equal to 1.');
        }

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


