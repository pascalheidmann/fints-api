<?php
/**
 * SingleMoneyTransferRecipientData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * finAPI RESTful Services
 *
 * finAPI RESTful Services
 *
 * OpenAPI spec version: v1.81.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * SingleMoneyTransferRecipientData Class Doc Comment
 *
 * @category Class
 * @description Recipient data for a single money transfer order
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SingleMoneyTransferRecipientData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SingleMoneyTransferRecipientData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'recipient_name' => 'string',
        'recipient_iban' => 'string',
        'recipient_bic' => 'string',
        'clearing_account_id' => 'string',
        'amount' => 'float',
        'purpose' => 'string',
        'sepa_purpose_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'recipient_name' => null,
        'recipient_iban' => null,
        'recipient_bic' => null,
        'clearing_account_id' => null,
        'amount' => null,
        'purpose' => null,
        'sepa_purpose_code' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'recipient_name' => 'recipientName',
        'recipient_iban' => 'recipientIban',
        'recipient_bic' => 'recipientBic',
        'clearing_account_id' => 'clearingAccountId',
        'amount' => 'amount',
        'purpose' => 'purpose',
        'sepa_purpose_code' => 'sepaPurposeCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recipient_name' => 'setRecipientName',
        'recipient_iban' => 'setRecipientIban',
        'recipient_bic' => 'setRecipientBic',
        'clearing_account_id' => 'setClearingAccountId',
        'amount' => 'setAmount',
        'purpose' => 'setPurpose',
        'sepa_purpose_code' => 'setSepaPurposeCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recipient_name' => 'getRecipientName',
        'recipient_iban' => 'getRecipientIban',
        'recipient_bic' => 'getRecipientBic',
        'clearing_account_id' => 'getClearingAccountId',
        'amount' => 'getAmount',
        'purpose' => 'getPurpose',
        'sepa_purpose_code' => 'getSepaPurposeCode'
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
        return self::$swaggerModelName;
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
        $this->container['recipient_name'] = isset($data['recipient_name']) ? $data['recipient_name'] : null;
        $this->container['recipient_iban'] = isset($data['recipient_iban']) ? $data['recipient_iban'] : null;
        $this->container['recipient_bic'] = isset($data['recipient_bic']) ? $data['recipient_bic'] : null;
        $this->container['clearing_account_id'] = isset($data['clearing_account_id']) ? $data['clearing_account_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['purpose'] = isset($data['purpose']) ? $data['purpose'] : null;
        $this->container['sepa_purpose_code'] = isset($data['sepa_purpose_code']) ? $data['sepa_purpose_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
     * Gets recipient_name
     *
     * @return string
     */
    public function getRecipientName()
    {
        return $this->container['recipient_name'];
    }

    /**
     * Sets recipient_name
     *
     * @param string $recipient_name Name of the recipient. Note: Neither finAPI nor the involved bank servers are guaranteed to validate the recipient name. Even if the recipient name does not depict the actual registered account holder of the specified recipient account, the money transfer request might still be successful. This field is optional only when you pass a clearing account as the recipient. Otherwise, this field is required.
     *
     * @return $this
     */
    public function setRecipientName($recipient_name)
    {
        $this->container['recipient_name'] = $recipient_name;

        return $this;
    }

    /**
     * Gets recipient_iban
     *
     * @return string
     */
    public function getRecipientIban()
    {
        return $this->container['recipient_iban'];
    }

    /**
     * Sets recipient_iban
     *
     * @param string $recipient_iban IBAN of the recipient's account. This field is optional only when you pass a clearing account as the recipient. Otherwise, this field is required.
     *
     * @return $this
     */
    public function setRecipientIban($recipient_iban)
    {
        $this->container['recipient_iban'] = $recipient_iban;

        return $this;
    }

    /**
     * Gets recipient_bic
     *
     * @return string
     */
    public function getRecipientBic()
    {
        return $this->container['recipient_bic'];
    }

    /**
     * Sets recipient_bic
     *
     * @param string $recipient_bic BIC of the recipient's account. Note: This field is optional when you pass a clearing account as the recipient or if the bank connection of the account that you want to transfer money from supports the IBAN-Only money transfer. You can find this out via GET /bankConnections/<id>. Also note that when a BIC is given, then this BIC will be used for the money transfer request independent of whether it is required or not (unless you pass a clearing account, in which case this field will always be ignored).
     *
     * @return $this
     */
    public function setRecipientBic($recipient_bic)
    {
        $this->container['recipient_bic'] = $recipient_bic;

        return $this;
    }

    /**
     * Gets clearing_account_id
     *
     * @return string
     */
    public function getClearingAccountId()
    {
        return $this->container['clearing_account_id'];
    }

    /**
     * Sets clearing_account_id
     *
     * @param string $clearing_account_id Identifier of a clearing account. If this field is set, then the fields 'recipientName', 'recipientIban' and 'recipientBic' will be ignored and the recipient account will be the specified clearing account.
     *
     * @return $this
     */
    public function setClearingAccountId($clearing_account_id)
    {
        $this->container['clearing_account_id'] = $clearing_account_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount The amount to transfer. Must be a positive decimal number with at most two decimal places (e.g. 99.99)
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param string $purpose The purpose of the transfer transaction
     *
     * @return $this
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets sepa_purpose_code
     *
     * @return string
     */
    public function getSepaPurposeCode()
    {
        return $this->container['sepa_purpose_code'];
    }

    /**
     * Sets sepa_purpose_code
     *
     * @param string $sepa_purpose_code SEPA purpose code, according to ISO 20022, external codes set.
     *
     * @return $this
     */
    public function setSepaPurposeCode($sepa_purpose_code)
    {
        $this->container['sepa_purpose_code'] = $sepa_purpose_code;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


