<?php
/**
 * LabelRecoveryResponseTrackingCandidate
 *
 * PHP version 5
 *
 * @category Class
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ship
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * 
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace UPS\Shipping\Shipping;

use \ArrayAccess;
use \UPS\Shipping\ObjectSerializer;

/**
 * LabelRecoveryResponseTrackingCandidate Class Doc Comment
 *
 * @category Class
 * @description Information containing the results of the users Label Recovery Request. Returned in the event the Shipper Number and Reference Number are supplied in the request.
 * @package  UPS\Shipping
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LabelRecoveryResponseTrackingCandidate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LabelRecoveryResponse_TrackingCandidate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'tracking_number' => 'string',
        'destination_postal_code' => 'string',
        'destination_country_code' => 'string',
        'pickup_date_range' => '\UPS\Shipping\Shipping\TrackingCandidatePickupDateRange'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'tracking_number' => null,
        'destination_postal_code' => null,
        'destination_country_code' => null,
        'pickup_date_range' => null
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
        'tracking_number' => 'TrackingNumber',
        'destination_postal_code' => 'DestinationPostalCode',
        'destination_country_code' => 'DestinationCountryCode',
        'pickup_date_range' => 'PickupDateRange'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tracking_number' => 'setTrackingNumber',
        'destination_postal_code' => 'setDestinationPostalCode',
        'destination_country_code' => 'setDestinationCountryCode',
        'pickup_date_range' => 'setPickupDateRange'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tracking_number' => 'getTrackingNumber',
        'destination_postal_code' => 'getDestinationPostalCode',
        'destination_country_code' => 'getDestinationCountryCode',
        'pickup_date_range' => 'getPickupDateRange'
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
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['destination_postal_code'] = isset($data['destination_postal_code']) ? $data['destination_postal_code'] : null;
        $this->container['destination_country_code'] = isset($data['destination_country_code']) ? $data['destination_country_code'] : null;
        $this->container['pickup_date_range'] = isset($data['pickup_date_range']) ? $data['pickup_date_range'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['tracking_number'] === null) {
            $invalidProperties[] = "'tracking_number' can't be null";
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
     * Gets tracking_number
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     *
     * @param string $tracking_number Packaging Tracking Number  Only supported for the web small package shipment so only supported 18 digit
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets destination_postal_code
     *
     * @return string
     */
    public function getDestinationPostalCode()
    {
        return $this->container['destination_postal_code'];
    }

    /**
     * Sets destination_postal_code
     *
     * @param string $destination_postal_code Destination postal code candidate
     *
     * @return $this
     */
    public function setDestinationPostalCode($destination_postal_code)
    {
        $this->container['destination_postal_code'] = $destination_postal_code;

        return $this;
    }

    /**
     * Gets destination_country_code
     *
     * @return string
     */
    public function getDestinationCountryCode()
    {
        return $this->container['destination_country_code'];
    }

    /**
     * Sets destination_country_code
     *
     * @param string $destination_country_code Destination country or territory code candidate, like US = USA, CA = Canada  Must be valid ups country or territory code
     *
     * @return $this
     */
    public function setDestinationCountryCode($destination_country_code)
    {
        $this->container['destination_country_code'] = $destination_country_code;

        return $this;
    }

    /**
     * Gets pickup_date_range
     *
     * @return \UPS\Shipping\Shipping\TrackingCandidatePickupDateRange
     */
    public function getPickupDateRange()
    {
        return $this->container['pickup_date_range'];
    }

    /**
     * Sets pickup_date_range
     *
     * @param \UPS\Shipping\Shipping\TrackingCandidatePickupDateRange $pickup_date_range pickup_date_range
     *
     * @return $this
     */
    public function setPickupDateRange($pickup_date_range)
    {
        $this->container['pickup_date_range'] = $pickup_date_range;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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