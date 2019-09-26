<?php
/**
 * Bank
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
 * Bank Class Doc Comment
 *
 * @category Class
 * @description Container for a bank&#39;s data
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Bank implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Bank';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'login_hint' => 'string',
        'bic' => 'string',
        'blzs' => 'string[]',
        'blz' => 'string',
        'location' => 'string',
        'city' => 'string',
        'is_supported' => 'bool',
        'is_test_bank' => 'bool',
        'popularity' => 'int',
        'health' => 'int',
        'login_field_user_id' => 'string',
        'login_field_customer_id' => 'string',
        'login_field_pin' => 'string',
        'pins_are_volatile' => 'bool',
        'is_customer_id_password' => 'bool',
        'supported_data_sources' => 'string[]',
        'interfaces' => '\Swagger\Client\Model\BankInterface[]',
        'last_communication_attempt' => 'string',
        'last_successful_communication' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'login_hint' => null,
        'bic' => null,
        'blzs' => null,
        'blz' => null,
        'location' => null,
        'city' => null,
        'is_supported' => null,
        'is_test_bank' => null,
        'popularity' => 'int32',
        'health' => 'int32',
        'login_field_user_id' => null,
        'login_field_customer_id' => null,
        'login_field_pin' => null,
        'pins_are_volatile' => null,
        'is_customer_id_password' => null,
        'supported_data_sources' => null,
        'interfaces' => null,
        'last_communication_attempt' => null,
        'last_successful_communication' => null
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
        'id' => 'id',
        'name' => 'name',
        'login_hint' => 'loginHint',
        'bic' => 'bic',
        'blzs' => 'blzs',
        'blz' => 'blz',
        'location' => 'location',
        'city' => 'city',
        'is_supported' => 'isSupported',
        'is_test_bank' => 'isTestBank',
        'popularity' => 'popularity',
        'health' => 'health',
        'login_field_user_id' => 'loginFieldUserId',
        'login_field_customer_id' => 'loginFieldCustomerId',
        'login_field_pin' => 'loginFieldPin',
        'pins_are_volatile' => 'pinsAreVolatile',
        'is_customer_id_password' => 'isCustomerIdPassword',
        'supported_data_sources' => 'supportedDataSources',
        'interfaces' => 'interfaces',
        'last_communication_attempt' => 'lastCommunicationAttempt',
        'last_successful_communication' => 'lastSuccessfulCommunication'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'login_hint' => 'setLoginHint',
        'bic' => 'setBic',
        'blzs' => 'setBlzs',
        'blz' => 'setBlz',
        'location' => 'setLocation',
        'city' => 'setCity',
        'is_supported' => 'setIsSupported',
        'is_test_bank' => 'setIsTestBank',
        'popularity' => 'setPopularity',
        'health' => 'setHealth',
        'login_field_user_id' => 'setLoginFieldUserId',
        'login_field_customer_id' => 'setLoginFieldCustomerId',
        'login_field_pin' => 'setLoginFieldPin',
        'pins_are_volatile' => 'setPinsAreVolatile',
        'is_customer_id_password' => 'setIsCustomerIdPassword',
        'supported_data_sources' => 'setSupportedDataSources',
        'interfaces' => 'setInterfaces',
        'last_communication_attempt' => 'setLastCommunicationAttempt',
        'last_successful_communication' => 'setLastSuccessfulCommunication'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'login_hint' => 'getLoginHint',
        'bic' => 'getBic',
        'blzs' => 'getBlzs',
        'blz' => 'getBlz',
        'location' => 'getLocation',
        'city' => 'getCity',
        'is_supported' => 'getIsSupported',
        'is_test_bank' => 'getIsTestBank',
        'popularity' => 'getPopularity',
        'health' => 'getHealth',
        'login_field_user_id' => 'getLoginFieldUserId',
        'login_field_customer_id' => 'getLoginFieldCustomerId',
        'login_field_pin' => 'getLoginFieldPin',
        'pins_are_volatile' => 'getPinsAreVolatile',
        'is_customer_id_password' => 'getIsCustomerIdPassword',
        'supported_data_sources' => 'getSupportedDataSources',
        'interfaces' => 'getInterfaces',
        'last_communication_attempt' => 'getLastCommunicationAttempt',
        'last_successful_communication' => 'getLastSuccessfulCommunication'
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

    const SUPPORTED_DATA_SOURCES_WEB_SCRAPER = 'WEB_SCRAPER';
    const SUPPORTED_DATA_SOURCES_FINTS_SERVER = 'FINTS_SERVER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSupportedDataSourcesAllowableValues()
    {
        return [
            self::SUPPORTED_DATA_SOURCES_WEB_SCRAPER,
            self::SUPPORTED_DATA_SOURCES_FINTS_SERVER,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['login_hint'] = isset($data['login_hint']) ? $data['login_hint'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['blzs'] = isset($data['blzs']) ? $data['blzs'] : null;
        $this->container['blz'] = isset($data['blz']) ? $data['blz'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['is_supported'] = isset($data['is_supported']) ? $data['is_supported'] : null;
        $this->container['is_test_bank'] = isset($data['is_test_bank']) ? $data['is_test_bank'] : null;
        $this->container['popularity'] = isset($data['popularity']) ? $data['popularity'] : null;
        $this->container['health'] = isset($data['health']) ? $data['health'] : null;
        $this->container['login_field_user_id'] = isset($data['login_field_user_id']) ? $data['login_field_user_id'] : null;
        $this->container['login_field_customer_id'] = isset($data['login_field_customer_id']) ? $data['login_field_customer_id'] : null;
        $this->container['login_field_pin'] = isset($data['login_field_pin']) ? $data['login_field_pin'] : null;
        $this->container['pins_are_volatile'] = isset($data['pins_are_volatile']) ? $data['pins_are_volatile'] : null;
        $this->container['is_customer_id_password'] = isset($data['is_customer_id_password']) ? $data['is_customer_id_password'] : null;
        $this->container['supported_data_sources'] = isset($data['supported_data_sources']) ? $data['supported_data_sources'] : null;
        $this->container['interfaces'] = isset($data['interfaces']) ? $data['interfaces'] : null;
        $this->container['last_communication_attempt'] = isset($data['last_communication_attempt']) ? $data['last_communication_attempt'] : null;
        $this->container['last_successful_communication'] = isset($data['last_successful_communication']) ? $data['last_successful_communication'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['blzs'] === null) {
            $invalidProperties[] = "'blzs' can't be null";
        }
        if ($this->container['blz'] === null) {
            $invalidProperties[] = "'blz' can't be null";
        }
        if ($this->container['is_supported'] === null) {
            $invalidProperties[] = "'is_supported' can't be null";
        }
        if ($this->container['is_test_bank'] === null) {
            $invalidProperties[] = "'is_test_bank' can't be null";
        }
        if ($this->container['popularity'] === null) {
            $invalidProperties[] = "'popularity' can't be null";
        }
        if ($this->container['health'] === null) {
            $invalidProperties[] = "'health' can't be null";
        }
        if (($this->container['health'] > 100)) {
            $invalidProperties[] = "invalid value for 'health', must be smaller than or equal to 100.";
        }

        if (($this->container['health'] < 0)) {
            $invalidProperties[] = "invalid value for 'health', must be bigger than or equal to 0.";
        }

        if ($this->container['pins_are_volatile'] === null) {
            $invalidProperties[] = "'pins_are_volatile' can't be null";
        }
        if ($this->container['is_customer_id_password'] === null) {
            $invalidProperties[] = "'is_customer_id_password' can't be null";
        }
        if ($this->container['supported_data_sources'] === null) {
            $invalidProperties[] = "'supported_data_sources' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Bank identifier.<br/><br/>NOTE: Do NOT assume that the identifiers of banks are the same across different finAPI environments. In fact, the identifiers may change whenever a new finAPI version is released, even within the same environment. The identifiers are meant to be used for references within the finAPI services only, but not for hard-coding them in your application. If you need to hard-code the usage of a certain bank within your application, please instead refer to the BLZ.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name of bank
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets login_hint
     *
     * @return string
     */
    public function getLoginHint()
    {
        return $this->container['login_hint'];
    }

    /**
     * Sets login_hint
     *
     * @param string $login_hint THIS FIELD IS DEPRECATED AND WILL BE REMOVED. Refer to the 'loginHint' in the 'interfaces' instead.<br/><br/>Login hint. Contains a German message for the user that explains what kind of credentials are expected.<br/><br/>Please note that it is strongly recommended to always show the login hint to the user if there is one, as the credentials that finAPI requires for the bank might be different to the credentials that the user knows from the bank's website.<br/><br/>Also note that the contents of this field should always be interpreted as HTML, as the text might contain HTML tags for highlighted words, paragraphs, etc.
     *
     * @return $this
     */
    public function setLoginHint($login_hint)
    {
        $this->container['login_hint'] = $login_hint;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic BIC of bank
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets blzs
     *
     * @return string[]
     */
    public function getBlzs()
    {
        return $this->container['blzs'];
    }

    /**
     * Sets blzs
     *
     * @param string[] $blzs THIS FIELD IS DEPRECATED AND WILL BE REMOVED. Refer to the 'blz' field instead.
     *
     * @return $this
     */
    public function setBlzs($blzs)
    {
        $this->container['blzs'] = $blzs;

        return $this;
    }

    /**
     * Gets blz
     *
     * @return string
     */
    public function getBlz()
    {
        return $this->container['blz'];
    }

    /**
     * Sets blz
     *
     * @param string $blz BLZ of bank
     *
     * @return $this
     */
    public function setBlz($blz)
    {
        $this->container['blz'] = $blz;

        return $this;
    }

    /**
     * Gets location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param string $location Bank location (two-letter country code; ISO 3166 ALPHA-2). Note that when this field is not set, it means that this bank depicts an international institute which is not bound to any specific country.
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City that this bank is located in. Note that this field may not be set for some banks.
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets is_supported
     *
     * @return bool
     */
    public function getIsSupported()
    {
        return $this->container['is_supported'];
    }

    /**
     * Sets is_supported
     *
     * @param bool $is_supported Whether this bank is supported by finAPI, i.e. whether you can import/update a bank connection of this bank.<br><br>NOTE: This field is deprecated and will be removed at some point. Please refer to field 'interfaces' instead.
     *
     * @return $this
     */
    public function setIsSupported($is_supported)
    {
        $this->container['is_supported'] = $is_supported;

        return $this;
    }

    /**
     * Gets is_test_bank
     *
     * @return bool
     */
    public function getIsTestBank()
    {
        return $this->container['is_test_bank'];
    }

    /**
     * Sets is_test_bank
     *
     * @param bool $is_test_bank If true, then this bank does not depict a real bank, but rather a testing endpoint provided by a bank or by finAPI. You probably want to regard these banks only during the development of your application, but not in production. You can filter out these banks in production by making sure that the 'isTestBank' parameter is always set to 'false' whenever your application is calling the 'Get and search all banks' service.
     *
     * @return $this
     */
    public function setIsTestBank($is_test_bank)
    {
        $this->container['is_test_bank'] = $is_test_bank;

        return $this;
    }

    /**
     * Gets popularity
     *
     * @return int
     */
    public function getPopularity()
    {
        return $this->container['popularity'];
    }

    /**
     * Sets popularity
     *
     * @param int $popularity Popularity of this bank with your users (mandator-wide, i.e. across all of your clients). The value equals the number of bank connections that are currently imported for this bank across all of your users (which means it is a constantly adjusting value). You can use this field for statistical evaluation, and also for ordering bank search results (see service 'Get and search all banks').
     *
     * @return $this
     */
    public function setPopularity($popularity)
    {
        $this->container['popularity'] = $popularity;

        return $this;
    }

    /**
     * Gets health
     *
     * @return int
     */
    public function getHealth()
    {
        return $this->container['health'];
    }

    /**
     * Sets health
     *
     * @param int $health The health status of this bank. This is a value between 0 and 100, depicting the percentage of successful communication attempts with this bank during the latest couple of bank connection imports or updates (across the entire finAPI system). Note that 'successful' means that there was no technical error trying to establish a communication with the bank. Non-technical errors (like incorrect credentials) are regarded successful communication attempts.
     *
     * @return $this
     */
    public function setHealth($health)
    {

        if (($health > 100)) {
            throw new \InvalidArgumentException('invalid value for $health when calling Bank., must be smaller than or equal to 100.');
        }
        if (($health < 0)) {
            throw new \InvalidArgumentException('invalid value for $health when calling Bank., must be bigger than or equal to 0.');
        }

        $this->container['health'] = $health;

        return $this;
    }

    /**
     * Gets login_field_user_id
     *
     * @return string
     */
    public function getLoginFieldUserId()
    {
        return $this->container['login_field_user_id'];
    }

    /**
     * Sets login_field_user_id
     *
     * @param string $login_field_user_id THIS FIELD IS DEPRECATED AND WILL BE REMOVED. Refer to the 'loginCredentials' in the 'interfaces' instead.<br/><br/>Label for the user ID login field, as it is called on the bank's website (e.g. \"Nutzerkennung\"). If this field is set (i.e. not null) then you should prompt your users to enter the required data in a text field which you can label with this field's value.
     *
     * @return $this
     */
    public function setLoginFieldUserId($login_field_user_id)
    {
        $this->container['login_field_user_id'] = $login_field_user_id;

        return $this;
    }

    /**
     * Gets login_field_customer_id
     *
     * @return string
     */
    public function getLoginFieldCustomerId()
    {
        return $this->container['login_field_customer_id'];
    }

    /**
     * Sets login_field_customer_id
     *
     * @param string $login_field_customer_id THIS FIELD IS DEPRECATED AND WILL BE REMOVED. Refer to the 'loginCredentials' in the 'interfaces' instead.<br/><br/>Label for the customer ID login field, as it is called on the bank's website (e.g. \"Kundennummer\"). If this field is set (i.e. not null) then you should prompt your users to enter the required data in a text field which you can label with this field's value.
     *
     * @return $this
     */
    public function setLoginFieldCustomerId($login_field_customer_id)
    {
        $this->container['login_field_customer_id'] = $login_field_customer_id;

        return $this;
    }

    /**
     * Gets login_field_pin
     *
     * @return string
     */
    public function getLoginFieldPin()
    {
        return $this->container['login_field_pin'];
    }

    /**
     * Sets login_field_pin
     *
     * @param string $login_field_pin THIS FIELD IS DEPRECATED AND WILL BE REMOVED. Refer to the 'loginCredentials' in the 'interfaces' instead.<br/><br/>Label for the PIN field, as it is called on the bank's website (mostly \"PIN\"). If this field is set (i.e. not null) then you should prompt your users to enter the required data in a text field which you can label with this field's value.
     *
     * @return $this
     */
    public function setLoginFieldPin($login_field_pin)
    {
        $this->container['login_field_pin'] = $login_field_pin;

        return $this;
    }

    /**
     * Gets pins_are_volatile
     *
     * @return bool
     */
    public function getPinsAreVolatile()
    {
        return $this->container['pins_are_volatile'];
    }

    /**
     * Sets pins_are_volatile
     *
     * @param bool $pins_are_volatile THIS FIELD IS DEPRECATED AND WILL BE REMOVED. Refer to the 'isVolatile' field of the 'loginCredentials' in 'interfaces' instead.<br/><br/>Whether the PINs that are used for authentication with the bank are volatile. If the PINs are volatile, it means that a PIN is usually valid only for a single authentication, and is then invalidated. If a bank uses volatile PINs, it is strongly inadvisable to store PINs in finAPI, as a stored PIN will not work for future authentications.<br><br>NOTE: This field is deprecated and will be removed at some point.
     *
     * @return $this
     */
    public function setPinsAreVolatile($pins_are_volatile)
    {
        $this->container['pins_are_volatile'] = $pins_are_volatile;

        return $this;
    }

    /**
     * Gets is_customer_id_password
     *
     * @return bool
     */
    public function getIsCustomerIdPassword()
    {
        return $this->container['is_customer_id_password'];
    }

    /**
     * Sets is_customer_id_password
     *
     * @param bool $is_customer_id_password THIS FIELD IS DEPRECATED AND WILL BE REMOVED. Refer to the 'isSecret' field of the 'loginCredentials' in 'interfaces' instead.<br/><br/>Whether the banking customer ID has to be treated like a password. Certain banks require a second password (besides the PIN) for the user to login. In this case your application should use a password input field when prompting users for their credentials.<br><br>NOTE: This field is deprecated and will be removed at some point.
     *
     * @return $this
     */
    public function setIsCustomerIdPassword($is_customer_id_password)
    {
        $this->container['is_customer_id_password'] = $is_customer_id_password;

        return $this;
    }

    /**
     * Gets supported_data_sources
     *
     * @return string[]
     */
    public function getSupportedDataSources()
    {
        return $this->container['supported_data_sources'];
    }

    /**
     * Sets supported_data_sources
     *
     * @param string[] $supported_data_sources THIS FIELD IS DEPRECATED AND WILL BE REMOVED. Refer to the 'interfaces' instead.<br/><br/>List of the data sources that finAPI will use for data download for this bank. Possible values:<br><br>&bull; <code>FINTS_SERVER</code> - means that finAPI will download data via the bank's FinTS interface.<br>&bull; <code>WEB_SCRAPER</code> - means that finAPI will parse data from the bank's online banking website.<br><br>Note that this list will be empty for non-supported banks. Note also that web scraping might be disabled for your client (see GET /clientConfiguration). When this is the case, then finAPI will not use the web scraper for data download, and if the web scraper is the only supported data source of this bank, then finAPI will not allow to download any data for this bank at all (for details, see POST /bankConnections/import and POST /bankConnections/update).
     *
     * @return $this
     */
    public function setSupportedDataSources($supported_data_sources)
    {
        $allowedValues = $this->getSupportedDataSourcesAllowableValues();
        if (array_diff($supported_data_sources, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'supported_data_sources', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['supported_data_sources'] = $supported_data_sources;

        return $this;
    }

    /**
     * Gets interfaces
     *
     * @return \Swagger\Client\Model\BankInterface[]
     */
    public function getInterfaces()
    {
        return $this->container['interfaces'];
    }

    /**
     * Sets interfaces
     *
     * @param \Swagger\Client\Model\BankInterface[] $interfaces Set of interfaces that finAPI can use to connect to the bank. Note that this set will be empty for non-supported banks. Note also that the WEB_SCRAPER interface might be disabled for your client (see GET /clientConfiguration). When this is the case, then finAPI will not use the web scraper for data download, and if the web scraper is the only supported interface of this bank, then finAPI will not allow to download any data for this bank at all (for details, see POST /bankConnections/import and POST /bankConnections/update).
     *
     * @return $this
     */
    public function setInterfaces($interfaces)
    {
        $this->container['interfaces'] = $interfaces;

        return $this;
    }

    /**
     * Gets last_communication_attempt
     *
     * @return string
     */
    public function getLastCommunicationAttempt()
    {
        return $this->container['last_communication_attempt'];
    }

    /**
     * Sets last_communication_attempt
     *
     * @param string $last_communication_attempt Time of the last communication attempt with this bank during a bank connection import or update (across the entire finAPI system). The value is returned in the format 'YYYY-MM-DD HH:MM:SS.SSS' (german time).
     *
     * @return $this
     */
    public function setLastCommunicationAttempt($last_communication_attempt)
    {
        $this->container['last_communication_attempt'] = $last_communication_attempt;

        return $this;
    }

    /**
     * Gets last_successful_communication
     *
     * @return string
     */
    public function getLastSuccessfulCommunication()
    {
        return $this->container['last_successful_communication'];
    }

    /**
     * Sets last_successful_communication
     *
     * @param string $last_successful_communication Time of the last successful communication with this bank during a bank connection import or update (across the entire finAPI system). The value is returned in the format 'YYYY-MM-DD HH:MM:SS.SSS' (german time).
     *
     * @return $this
     */
    public function setLastSuccessfulCommunication($last_successful_communication)
    {
        $this->container['last_successful_communication'] = $last_successful_communication;

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


