<?php
/**
 * ProductInfoProductAttributes
 *
 * PHP version 5
 *
 * @category Class
 * @package  StockX\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * StockX API
 *
 * Provides access to StockX's public services, allowing end users to query for product and order information.
 *
 * OpenAPI spec version: final32218.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace StockX\Client\Model;

use \ArrayAccess;
use \StockX\Client\ObjectSerializer;

/**
 * ProductInfoProductAttributes Class Doc Comment
 *
 * @category Class
 * @package  StockX\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductInfoProductAttributes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductInfo_product_attributes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_category' => 'string',
        'url_key' => 'string',
        'slug' => 'string',
        'brand' => 'string',
        'ticker' => 'string',
        'style_id' => 'string',
        'model' => 'string',
        'name' => 'string',
        'title' => 'string',
        'size_locale' => 'string',
        'size_title' => 'string',
        'size_descriptor' => 'string',
        'size_all_descriptor' => 'string',
        'gender' => 'string',
        'condition' => 'string',
        'minimum_bid' => 'int',
        'uniq_bids' => 'bool',
        'primary_category' => 'string',
        'secondary_category' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_category' => null,
        'url_key' => null,
        'slug' => null,
        'brand' => null,
        'ticker' => null,
        'style_id' => null,
        'model' => null,
        'name' => null,
        'title' => null,
        'size_locale' => null,
        'size_title' => null,
        'size_descriptor' => null,
        'size_all_descriptor' => null,
        'gender' => null,
        'condition' => null,
        'minimum_bid' => null,
        'uniq_bids' => null,
        'primary_category' => null,
        'secondary_category' => null
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
        'product_category' => 'product_category',
        'url_key' => 'url_key',
        'slug' => 'slug',
        'brand' => 'brand',
        'ticker' => 'ticker',
        'style_id' => 'style_id',
        'model' => 'model',
        'name' => 'name',
        'title' => 'title',
        'size_locale' => 'size_locale',
        'size_title' => 'size_title',
        'size_descriptor' => 'size_descriptor',
        'size_all_descriptor' => 'size_all_descriptor',
        'gender' => 'gender',
        'condition' => 'condition',
        'minimum_bid' => 'minimum_bid',
        'uniq_bids' => 'uniq_bids',
        'primary_category' => 'primary_category',
        'secondary_category' => 'secondary_category'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_category' => 'setProductCategory',
        'url_key' => 'setUrlKey',
        'slug' => 'setSlug',
        'brand' => 'setBrand',
        'ticker' => 'setTicker',
        'style_id' => 'setStyleId',
        'model' => 'setModel',
        'name' => 'setName',
        'title' => 'setTitle',
        'size_locale' => 'setSizeLocale',
        'size_title' => 'setSizeTitle',
        'size_descriptor' => 'setSizeDescriptor',
        'size_all_descriptor' => 'setSizeAllDescriptor',
        'gender' => 'setGender',
        'condition' => 'setCondition',
        'minimum_bid' => 'setMinimumBid',
        'uniq_bids' => 'setUniqBids',
        'primary_category' => 'setPrimaryCategory',
        'secondary_category' => 'setSecondaryCategory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_category' => 'getProductCategory',
        'url_key' => 'getUrlKey',
        'slug' => 'getSlug',
        'brand' => 'getBrand',
        'ticker' => 'getTicker',
        'style_id' => 'getStyleId',
        'model' => 'getModel',
        'name' => 'getName',
        'title' => 'getTitle',
        'size_locale' => 'getSizeLocale',
        'size_title' => 'getSizeTitle',
        'size_descriptor' => 'getSizeDescriptor',
        'size_all_descriptor' => 'getSizeAllDescriptor',
        'gender' => 'getGender',
        'condition' => 'getCondition',
        'minimum_bid' => 'getMinimumBid',
        'uniq_bids' => 'getUniqBids',
        'primary_category' => 'getPrimaryCategory',
        'secondary_category' => 'getSecondaryCategory'
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
        $this->container['product_category'] = isset($data['product_category']) ? $data['product_category'] : null;
        $this->container['url_key'] = isset($data['url_key']) ? $data['url_key'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['ticker'] = isset($data['ticker']) ? $data['ticker'] : null;
        $this->container['style_id'] = isset($data['style_id']) ? $data['style_id'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['size_locale'] = isset($data['size_locale']) ? $data['size_locale'] : null;
        $this->container['size_title'] = isset($data['size_title']) ? $data['size_title'] : null;
        $this->container['size_descriptor'] = isset($data['size_descriptor']) ? $data['size_descriptor'] : null;
        $this->container['size_all_descriptor'] = isset($data['size_all_descriptor']) ? $data['size_all_descriptor'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['minimum_bid'] = isset($data['minimum_bid']) ? $data['minimum_bid'] : null;
        $this->container['uniq_bids'] = isset($data['uniq_bids']) ? $data['uniq_bids'] : null;
        $this->container['primary_category'] = isset($data['primary_category']) ? $data['primary_category'] : null;
        $this->container['secondary_category'] = isset($data['secondary_category']) ? $data['secondary_category'] : null;
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

        return true;
    }


    /**
     * Gets product_category
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string $product_category product_category
     *
     * @return $this
     */
    public function setProductCategory($product_category)
    {
        $this->container['product_category'] = $product_category;

        return $this;
    }

    /**
     * Gets url_key
     *
     * @return string
     */
    public function getUrlKey()
    {
        return $this->container['url_key'];
    }

    /**
     * Sets url_key
     *
     * @param string $url_key url_key
     *
     * @return $this
     */
    public function setUrlKey($url_key)
    {
        $this->container['url_key'] = $url_key;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets brand
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     *
     * @param string $brand brand
     *
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets ticker
     *
     * @return string
     */
    public function getTicker()
    {
        return $this->container['ticker'];
    }

    /**
     * Sets ticker
     *
     * @param string $ticker ticker
     *
     * @return $this
     */
    public function setTicker($ticker)
    {
        $this->container['ticker'] = $ticker;

        return $this;
    }

    /**
     * Gets style_id
     *
     * @return string
     */
    public function getStyleId()
    {
        return $this->container['style_id'];
    }

    /**
     * Sets style_id
     *
     * @param string $style_id style_id
     *
     * @return $this
     */
    public function setStyleId($style_id)
    {
        $this->container['style_id'] = $style_id;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets size_locale
     *
     * @return string
     */
    public function getSizeLocale()
    {
        return $this->container['size_locale'];
    }

    /**
     * Sets size_locale
     *
     * @param string $size_locale size_locale
     *
     * @return $this
     */
    public function setSizeLocale($size_locale)
    {
        $this->container['size_locale'] = $size_locale;

        return $this;
    }

    /**
     * Gets size_title
     *
     * @return string
     */
    public function getSizeTitle()
    {
        return $this->container['size_title'];
    }

    /**
     * Sets size_title
     *
     * @param string $size_title size_title
     *
     * @return $this
     */
    public function setSizeTitle($size_title)
    {
        $this->container['size_title'] = $size_title;

        return $this;
    }

    /**
     * Gets size_descriptor
     *
     * @return string
     */
    public function getSizeDescriptor()
    {
        return $this->container['size_descriptor'];
    }

    /**
     * Sets size_descriptor
     *
     * @param string $size_descriptor size_descriptor
     *
     * @return $this
     */
    public function setSizeDescriptor($size_descriptor)
    {
        $this->container['size_descriptor'] = $size_descriptor;

        return $this;
    }

    /**
     * Gets size_all_descriptor
     *
     * @return string
     */
    public function getSizeAllDescriptor()
    {
        return $this->container['size_all_descriptor'];
    }

    /**
     * Sets size_all_descriptor
     *
     * @param string $size_all_descriptor size_all_descriptor
     *
     * @return $this
     */
    public function setSizeAllDescriptor($size_all_descriptor)
    {
        $this->container['size_all_descriptor'] = $size_all_descriptor;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param string $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets minimum_bid
     *
     * @return int
     */
    public function getMinimumBid()
    {
        return $this->container['minimum_bid'];
    }

    /**
     * Sets minimum_bid
     *
     * @param int $minimum_bid minimum_bid
     *
     * @return $this
     */
    public function setMinimumBid($minimum_bid)
    {
        $this->container['minimum_bid'] = $minimum_bid;

        return $this;
    }

    /**
     * Gets uniq_bids
     *
     * @return bool
     */
    public function getUniqBids()
    {
        return $this->container['uniq_bids'];
    }

    /**
     * Sets uniq_bids
     *
     * @param bool $uniq_bids uniq_bids
     *
     * @return $this
     */
    public function setUniqBids($uniq_bids)
    {
        $this->container['uniq_bids'] = $uniq_bids;

        return $this;
    }

    /**
     * Gets primary_category
     *
     * @return string
     */
    public function getPrimaryCategory()
    {
        return $this->container['primary_category'];
    }

    /**
     * Sets primary_category
     *
     * @param string $primary_category primary_category
     *
     * @return $this
     */
    public function setPrimaryCategory($primary_category)
    {
        $this->container['primary_category'] = $primary_category;

        return $this;
    }

    /**
     * Gets secondary_category
     *
     * @return string
     */
    public function getSecondaryCategory()
    {
        return $this->container['secondary_category'];
    }

    /**
     * Sets secondary_category
     *
     * @param string $secondary_category secondary_category
     *
     * @return $this
     */
    public function setSecondaryCategory($secondary_category)
    {
        $this->container['secondary_category'] = $secondary_category;

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

