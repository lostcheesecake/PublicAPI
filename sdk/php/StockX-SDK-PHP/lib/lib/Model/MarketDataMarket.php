<?php
/**
 * MarketDataMarket
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
 * MarketDataMarket Class Doc Comment
 *
 * @category Class
 * @package  StockX\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MarketDataMarket implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MarketData_Market';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'product_id' => 'int',
        'sku_uuid' => 'string',
        'product_uuid' => 'string',
        'lowest_ask' => 'int',
        'lowest_ask_size' => 'string',
        'parent_lowest_ask' => 'int',
        'number_of_asks' => 'int',
        'sales_this_period' => 'int',
        'sales_last_period' => 'int',
        'highest_bid' => 'int',
        'highest_bid_size' => 'string',
        'number_of_bids' => 'int',
        'annual_high' => 'int',
        'annual_low' => 'int',
        'deadstock_range_low' => 'int',
        'deadstock_range_high' => 'int',
        'volatility' => 'float',
        'deadstock_sold' => 'int',
        'price_premium' => 'float',
        'average_deadstock_price' => 'int',
        'last_sale' => 'int',
        'last_sale_size' => 'string',
        'sales_last72_hours' => 'int',
        'change_value' => 'int',
        'change_percentage' => 'float',
        'abs_change_percentage' => 'float',
        'total_dollars' => 'int',
        'updated_at' => 'int',
        'last_lowest_ask_time' => 'int',
        'last_highest_bid_time' => 'int',
        'last_sale_date' => 'string',
        'created_at' => 'string',
        'deadstock_sold_rank' => 'int',
        'price_premium_rank' => 'int',
        'average_deadstock_price_rank' => 'int',
        'featured' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'product_id' => null,
        'sku_uuid' => null,
        'product_uuid' => null,
        'lowest_ask' => null,
        'lowest_ask_size' => null,
        'parent_lowest_ask' => null,
        'number_of_asks' => null,
        'sales_this_period' => null,
        'sales_last_period' => null,
        'highest_bid' => null,
        'highest_bid_size' => null,
        'number_of_bids' => null,
        'annual_high' => null,
        'annual_low' => null,
        'deadstock_range_low' => null,
        'deadstock_range_high' => null,
        'volatility' => null,
        'deadstock_sold' => null,
        'price_premium' => null,
        'average_deadstock_price' => null,
        'last_sale' => null,
        'last_sale_size' => null,
        'sales_last72_hours' => null,
        'change_value' => null,
        'change_percentage' => null,
        'abs_change_percentage' => null,
        'total_dollars' => null,
        'updated_at' => null,
        'last_lowest_ask_time' => null,
        'last_highest_bid_time' => null,
        'last_sale_date' => null,
        'created_at' => null,
        'deadstock_sold_rank' => null,
        'price_premium_rank' => null,
        'average_deadstock_price_rank' => null,
        'featured' => null
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
        'product_id' => 'productId',
        'sku_uuid' => 'skuUuid',
        'product_uuid' => 'productUuid',
        'lowest_ask' => 'lowestAsk',
        'lowest_ask_size' => 'lowestAskSize',
        'parent_lowest_ask' => 'parentLowestAsk',
        'number_of_asks' => 'numberOfAsks',
        'sales_this_period' => 'salesThisPeriod',
        'sales_last_period' => 'salesLastPeriod',
        'highest_bid' => 'highestBid',
        'highest_bid_size' => 'highestBidSize',
        'number_of_bids' => 'numberOfBids',
        'annual_high' => 'annualHigh',
        'annual_low' => 'annualLow',
        'deadstock_range_low' => 'deadstockRangeLow',
        'deadstock_range_high' => 'deadstockRangeHigh',
        'volatility' => 'volatility',
        'deadstock_sold' => 'deadstockSold',
        'price_premium' => 'pricePremium',
        'average_deadstock_price' => 'averageDeadstockPrice',
        'last_sale' => 'lastSale',
        'last_sale_size' => 'lastSaleSize',
        'sales_last72_hours' => 'salesLast72Hours',
        'change_value' => 'changeValue',
        'change_percentage' => 'changePercentage',
        'abs_change_percentage' => 'absChangePercentage',
        'total_dollars' => 'totalDollars',
        'updated_at' => 'updatedAt',
        'last_lowest_ask_time' => 'lastLowestAskTime',
        'last_highest_bid_time' => 'lastHighestBidTime',
        'last_sale_date' => 'lastSaleDate',
        'created_at' => 'createdAt',
        'deadstock_sold_rank' => 'deadstockSoldRank',
        'price_premium_rank' => 'pricePremiumRank',
        'average_deadstock_price_rank' => 'averageDeadstockPriceRank',
        'featured' => 'featured'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product_id' => 'setProductId',
        'sku_uuid' => 'setSkuUuid',
        'product_uuid' => 'setProductUuid',
        'lowest_ask' => 'setLowestAsk',
        'lowest_ask_size' => 'setLowestAskSize',
        'parent_lowest_ask' => 'setParentLowestAsk',
        'number_of_asks' => 'setNumberOfAsks',
        'sales_this_period' => 'setSalesThisPeriod',
        'sales_last_period' => 'setSalesLastPeriod',
        'highest_bid' => 'setHighestBid',
        'highest_bid_size' => 'setHighestBidSize',
        'number_of_bids' => 'setNumberOfBids',
        'annual_high' => 'setAnnualHigh',
        'annual_low' => 'setAnnualLow',
        'deadstock_range_low' => 'setDeadstockRangeLow',
        'deadstock_range_high' => 'setDeadstockRangeHigh',
        'volatility' => 'setVolatility',
        'deadstock_sold' => 'setDeadstockSold',
        'price_premium' => 'setPricePremium',
        'average_deadstock_price' => 'setAverageDeadstockPrice',
        'last_sale' => 'setLastSale',
        'last_sale_size' => 'setLastSaleSize',
        'sales_last72_hours' => 'setSalesLast72Hours',
        'change_value' => 'setChangeValue',
        'change_percentage' => 'setChangePercentage',
        'abs_change_percentage' => 'setAbsChangePercentage',
        'total_dollars' => 'setTotalDollars',
        'updated_at' => 'setUpdatedAt',
        'last_lowest_ask_time' => 'setLastLowestAskTime',
        'last_highest_bid_time' => 'setLastHighestBidTime',
        'last_sale_date' => 'setLastSaleDate',
        'created_at' => 'setCreatedAt',
        'deadstock_sold_rank' => 'setDeadstockSoldRank',
        'price_premium_rank' => 'setPricePremiumRank',
        'average_deadstock_price_rank' => 'setAverageDeadstockPriceRank',
        'featured' => 'setFeatured'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product_id' => 'getProductId',
        'sku_uuid' => 'getSkuUuid',
        'product_uuid' => 'getProductUuid',
        'lowest_ask' => 'getLowestAsk',
        'lowest_ask_size' => 'getLowestAskSize',
        'parent_lowest_ask' => 'getParentLowestAsk',
        'number_of_asks' => 'getNumberOfAsks',
        'sales_this_period' => 'getSalesThisPeriod',
        'sales_last_period' => 'getSalesLastPeriod',
        'highest_bid' => 'getHighestBid',
        'highest_bid_size' => 'getHighestBidSize',
        'number_of_bids' => 'getNumberOfBids',
        'annual_high' => 'getAnnualHigh',
        'annual_low' => 'getAnnualLow',
        'deadstock_range_low' => 'getDeadstockRangeLow',
        'deadstock_range_high' => 'getDeadstockRangeHigh',
        'volatility' => 'getVolatility',
        'deadstock_sold' => 'getDeadstockSold',
        'price_premium' => 'getPricePremium',
        'average_deadstock_price' => 'getAverageDeadstockPrice',
        'last_sale' => 'getLastSale',
        'last_sale_size' => 'getLastSaleSize',
        'sales_last72_hours' => 'getSalesLast72Hours',
        'change_value' => 'getChangeValue',
        'change_percentage' => 'getChangePercentage',
        'abs_change_percentage' => 'getAbsChangePercentage',
        'total_dollars' => 'getTotalDollars',
        'updated_at' => 'getUpdatedAt',
        'last_lowest_ask_time' => 'getLastLowestAskTime',
        'last_highest_bid_time' => 'getLastHighestBidTime',
        'last_sale_date' => 'getLastSaleDate',
        'created_at' => 'getCreatedAt',
        'deadstock_sold_rank' => 'getDeadstockSoldRank',
        'price_premium_rank' => 'getPricePremiumRank',
        'average_deadstock_price_rank' => 'getAverageDeadstockPriceRank',
        'featured' => 'getFeatured'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['sku_uuid'] = isset($data['sku_uuid']) ? $data['sku_uuid'] : null;
        $this->container['product_uuid'] = isset($data['product_uuid']) ? $data['product_uuid'] : null;
        $this->container['lowest_ask'] = isset($data['lowest_ask']) ? $data['lowest_ask'] : null;
        $this->container['lowest_ask_size'] = isset($data['lowest_ask_size']) ? $data['lowest_ask_size'] : null;
        $this->container['parent_lowest_ask'] = isset($data['parent_lowest_ask']) ? $data['parent_lowest_ask'] : null;
        $this->container['number_of_asks'] = isset($data['number_of_asks']) ? $data['number_of_asks'] : null;
        $this->container['sales_this_period'] = isset($data['sales_this_period']) ? $data['sales_this_period'] : null;
        $this->container['sales_last_period'] = isset($data['sales_last_period']) ? $data['sales_last_period'] : null;
        $this->container['highest_bid'] = isset($data['highest_bid']) ? $data['highest_bid'] : null;
        $this->container['highest_bid_size'] = isset($data['highest_bid_size']) ? $data['highest_bid_size'] : null;
        $this->container['number_of_bids'] = isset($data['number_of_bids']) ? $data['number_of_bids'] : null;
        $this->container['annual_high'] = isset($data['annual_high']) ? $data['annual_high'] : null;
        $this->container['annual_low'] = isset($data['annual_low']) ? $data['annual_low'] : null;
        $this->container['deadstock_range_low'] = isset($data['deadstock_range_low']) ? $data['deadstock_range_low'] : null;
        $this->container['deadstock_range_high'] = isset($data['deadstock_range_high']) ? $data['deadstock_range_high'] : null;
        $this->container['volatility'] = isset($data['volatility']) ? $data['volatility'] : null;
        $this->container['deadstock_sold'] = isset($data['deadstock_sold']) ? $data['deadstock_sold'] : null;
        $this->container['price_premium'] = isset($data['price_premium']) ? $data['price_premium'] : null;
        $this->container['average_deadstock_price'] = isset($data['average_deadstock_price']) ? $data['average_deadstock_price'] : null;
        $this->container['last_sale'] = isset($data['last_sale']) ? $data['last_sale'] : null;
        $this->container['last_sale_size'] = isset($data['last_sale_size']) ? $data['last_sale_size'] : null;
        $this->container['sales_last72_hours'] = isset($data['sales_last72_hours']) ? $data['sales_last72_hours'] : null;
        $this->container['change_value'] = isset($data['change_value']) ? $data['change_value'] : null;
        $this->container['change_percentage'] = isset($data['change_percentage']) ? $data['change_percentage'] : null;
        $this->container['abs_change_percentage'] = isset($data['abs_change_percentage']) ? $data['abs_change_percentage'] : null;
        $this->container['total_dollars'] = isset($data['total_dollars']) ? $data['total_dollars'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['last_lowest_ask_time'] = isset($data['last_lowest_ask_time']) ? $data['last_lowest_ask_time'] : null;
        $this->container['last_highest_bid_time'] = isset($data['last_highest_bid_time']) ? $data['last_highest_bid_time'] : null;
        $this->container['last_sale_date'] = isset($data['last_sale_date']) ? $data['last_sale_date'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['deadstock_sold_rank'] = isset($data['deadstock_sold_rank']) ? $data['deadstock_sold_rank'] : null;
        $this->container['price_premium_rank'] = isset($data['price_premium_rank']) ? $data['price_premium_rank'] : null;
        $this->container['average_deadstock_price_rank'] = isset($data['average_deadstock_price_rank']) ? $data['average_deadstock_price_rank'] : null;
        $this->container['featured'] = isset($data['featured']) ? $data['featured'] : null;
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
     * Gets product_id
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param int $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets sku_uuid
     *
     * @return string
     */
    public function getSkuUuid()
    {
        return $this->container['sku_uuid'];
    }

    /**
     * Sets sku_uuid
     *
     * @param string $sku_uuid sku_uuid
     *
     * @return $this
     */
    public function setSkuUuid($sku_uuid)
    {
        $this->container['sku_uuid'] = $sku_uuid;

        return $this;
    }

    /**
     * Gets product_uuid
     *
     * @return string
     */
    public function getProductUuid()
    {
        return $this->container['product_uuid'];
    }

    /**
     * Sets product_uuid
     *
     * @param string $product_uuid product_uuid
     *
     * @return $this
     */
    public function setProductUuid($product_uuid)
    {
        $this->container['product_uuid'] = $product_uuid;

        return $this;
    }

    /**
     * Gets lowest_ask
     *
     * @return int
     */
    public function getLowestAsk()
    {
        return $this->container['lowest_ask'];
    }

    /**
     * Sets lowest_ask
     *
     * @param int $lowest_ask lowest_ask
     *
     * @return $this
     */
    public function setLowestAsk($lowest_ask)
    {
        $this->container['lowest_ask'] = $lowest_ask;

        return $this;
    }

    /**
     * Gets lowest_ask_size
     *
     * @return string
     */
    public function getLowestAskSize()
    {
        return $this->container['lowest_ask_size'];
    }

    /**
     * Sets lowest_ask_size
     *
     * @param string $lowest_ask_size lowest_ask_size
     *
     * @return $this
     */
    public function setLowestAskSize($lowest_ask_size)
    {
        $this->container['lowest_ask_size'] = $lowest_ask_size;

        return $this;
    }

    /**
     * Gets parent_lowest_ask
     *
     * @return int
     */
    public function getParentLowestAsk()
    {
        return $this->container['parent_lowest_ask'];
    }

    /**
     * Sets parent_lowest_ask
     *
     * @param int $parent_lowest_ask parent_lowest_ask
     *
     * @return $this
     */
    public function setParentLowestAsk($parent_lowest_ask)
    {
        $this->container['parent_lowest_ask'] = $parent_lowest_ask;

        return $this;
    }

    /**
     * Gets number_of_asks
     *
     * @return int
     */
    public function getNumberOfAsks()
    {
        return $this->container['number_of_asks'];
    }

    /**
     * Sets number_of_asks
     *
     * @param int $number_of_asks number_of_asks
     *
     * @return $this
     */
    public function setNumberOfAsks($number_of_asks)
    {
        $this->container['number_of_asks'] = $number_of_asks;

        return $this;
    }

    /**
     * Gets sales_this_period
     *
     * @return int
     */
    public function getSalesThisPeriod()
    {
        return $this->container['sales_this_period'];
    }

    /**
     * Sets sales_this_period
     *
     * @param int $sales_this_period sales_this_period
     *
     * @return $this
     */
    public function setSalesThisPeriod($sales_this_period)
    {
        $this->container['sales_this_period'] = $sales_this_period;

        return $this;
    }

    /**
     * Gets sales_last_period
     *
     * @return int
     */
    public function getSalesLastPeriod()
    {
        return $this->container['sales_last_period'];
    }

    /**
     * Sets sales_last_period
     *
     * @param int $sales_last_period sales_last_period
     *
     * @return $this
     */
    public function setSalesLastPeriod($sales_last_period)
    {
        $this->container['sales_last_period'] = $sales_last_period;

        return $this;
    }

    /**
     * Gets highest_bid
     *
     * @return int
     */
    public function getHighestBid()
    {
        return $this->container['highest_bid'];
    }

    /**
     * Sets highest_bid
     *
     * @param int $highest_bid highest_bid
     *
     * @return $this
     */
    public function setHighestBid($highest_bid)
    {
        $this->container['highest_bid'] = $highest_bid;

        return $this;
    }

    /**
     * Gets highest_bid_size
     *
     * @return string
     */
    public function getHighestBidSize()
    {
        return $this->container['highest_bid_size'];
    }

    /**
     * Sets highest_bid_size
     *
     * @param string $highest_bid_size highest_bid_size
     *
     * @return $this
     */
    public function setHighestBidSize($highest_bid_size)
    {
        $this->container['highest_bid_size'] = $highest_bid_size;

        return $this;
    }

    /**
     * Gets number_of_bids
     *
     * @return int
     */
    public function getNumberOfBids()
    {
        return $this->container['number_of_bids'];
    }

    /**
     * Sets number_of_bids
     *
     * @param int $number_of_bids number_of_bids
     *
     * @return $this
     */
    public function setNumberOfBids($number_of_bids)
    {
        $this->container['number_of_bids'] = $number_of_bids;

        return $this;
    }

    /**
     * Gets annual_high
     *
     * @return int
     */
    public function getAnnualHigh()
    {
        return $this->container['annual_high'];
    }

    /**
     * Sets annual_high
     *
     * @param int $annual_high annual_high
     *
     * @return $this
     */
    public function setAnnualHigh($annual_high)
    {
        $this->container['annual_high'] = $annual_high;

        return $this;
    }

    /**
     * Gets annual_low
     *
     * @return int
     */
    public function getAnnualLow()
    {
        return $this->container['annual_low'];
    }

    /**
     * Sets annual_low
     *
     * @param int $annual_low annual_low
     *
     * @return $this
     */
    public function setAnnualLow($annual_low)
    {
        $this->container['annual_low'] = $annual_low;

        return $this;
    }

    /**
     * Gets deadstock_range_low
     *
     * @return int
     */
    public function getDeadstockRangeLow()
    {
        return $this->container['deadstock_range_low'];
    }

    /**
     * Sets deadstock_range_low
     *
     * @param int $deadstock_range_low deadstock_range_low
     *
     * @return $this
     */
    public function setDeadstockRangeLow($deadstock_range_low)
    {
        $this->container['deadstock_range_low'] = $deadstock_range_low;

        return $this;
    }

    /**
     * Gets deadstock_range_high
     *
     * @return int
     */
    public function getDeadstockRangeHigh()
    {
        return $this->container['deadstock_range_high'];
    }

    /**
     * Sets deadstock_range_high
     *
     * @param int $deadstock_range_high deadstock_range_high
     *
     * @return $this
     */
    public function setDeadstockRangeHigh($deadstock_range_high)
    {
        $this->container['deadstock_range_high'] = $deadstock_range_high;

        return $this;
    }

    /**
     * Gets volatility
     *
     * @return float
     */
    public function getVolatility()
    {
        return $this->container['volatility'];
    }

    /**
     * Sets volatility
     *
     * @param float $volatility volatility
     *
     * @return $this
     */
    public function setVolatility($volatility)
    {
        $this->container['volatility'] = $volatility;

        return $this;
    }

    /**
     * Gets deadstock_sold
     *
     * @return int
     */
    public function getDeadstockSold()
    {
        return $this->container['deadstock_sold'];
    }

    /**
     * Sets deadstock_sold
     *
     * @param int $deadstock_sold deadstock_sold
     *
     * @return $this
     */
    public function setDeadstockSold($deadstock_sold)
    {
        $this->container['deadstock_sold'] = $deadstock_sold;

        return $this;
    }

    /**
     * Gets price_premium
     *
     * @return float
     */
    public function getPricePremium()
    {
        return $this->container['price_premium'];
    }

    /**
     * Sets price_premium
     *
     * @param float $price_premium price_premium
     *
     * @return $this
     */
    public function setPricePremium($price_premium)
    {
        $this->container['price_premium'] = $price_premium;

        return $this;
    }

    /**
     * Gets average_deadstock_price
     *
     * @return int
     */
    public function getAverageDeadstockPrice()
    {
        return $this->container['average_deadstock_price'];
    }

    /**
     * Sets average_deadstock_price
     *
     * @param int $average_deadstock_price average_deadstock_price
     *
     * @return $this
     */
    public function setAverageDeadstockPrice($average_deadstock_price)
    {
        $this->container['average_deadstock_price'] = $average_deadstock_price;

        return $this;
    }

    /**
     * Gets last_sale
     *
     * @return int
     */
    public function getLastSale()
    {
        return $this->container['last_sale'];
    }

    /**
     * Sets last_sale
     *
     * @param int $last_sale last_sale
     *
     * @return $this
     */
    public function setLastSale($last_sale)
    {
        $this->container['last_sale'] = $last_sale;

        return $this;
    }

    /**
     * Gets last_sale_size
     *
     * @return string
     */
    public function getLastSaleSize()
    {
        return $this->container['last_sale_size'];
    }

    /**
     * Sets last_sale_size
     *
     * @param string $last_sale_size last_sale_size
     *
     * @return $this
     */
    public function setLastSaleSize($last_sale_size)
    {
        $this->container['last_sale_size'] = $last_sale_size;

        return $this;
    }

    /**
     * Gets sales_last72_hours
     *
     * @return int
     */
    public function getSalesLast72Hours()
    {
        return $this->container['sales_last72_hours'];
    }

    /**
     * Sets sales_last72_hours
     *
     * @param int $sales_last72_hours sales_last72_hours
     *
     * @return $this
     */
    public function setSalesLast72Hours($sales_last72_hours)
    {
        $this->container['sales_last72_hours'] = $sales_last72_hours;

        return $this;
    }

    /**
     * Gets change_value
     *
     * @return int
     */
    public function getChangeValue()
    {
        return $this->container['change_value'];
    }

    /**
     * Sets change_value
     *
     * @param int $change_value change_value
     *
     * @return $this
     */
    public function setChangeValue($change_value)
    {
        $this->container['change_value'] = $change_value;

        return $this;
    }

    /**
     * Gets change_percentage
     *
     * @return float
     */
    public function getChangePercentage()
    {
        return $this->container['change_percentage'];
    }

    /**
     * Sets change_percentage
     *
     * @param float $change_percentage change_percentage
     *
     * @return $this
     */
    public function setChangePercentage($change_percentage)
    {
        $this->container['change_percentage'] = $change_percentage;

        return $this;
    }

    /**
     * Gets abs_change_percentage
     *
     * @return float
     */
    public function getAbsChangePercentage()
    {
        return $this->container['abs_change_percentage'];
    }

    /**
     * Sets abs_change_percentage
     *
     * @param float $abs_change_percentage abs_change_percentage
     *
     * @return $this
     */
    public function setAbsChangePercentage($abs_change_percentage)
    {
        $this->container['abs_change_percentage'] = $abs_change_percentage;

        return $this;
    }

    /**
     * Gets total_dollars
     *
     * @return int
     */
    public function getTotalDollars()
    {
        return $this->container['total_dollars'];
    }

    /**
     * Sets total_dollars
     *
     * @param int $total_dollars total_dollars
     *
     * @return $this
     */
    public function setTotalDollars($total_dollars)
    {
        $this->container['total_dollars'] = $total_dollars;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return int
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param int $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets last_lowest_ask_time
     *
     * @return int
     */
    public function getLastLowestAskTime()
    {
        return $this->container['last_lowest_ask_time'];
    }

    /**
     * Sets last_lowest_ask_time
     *
     * @param int $last_lowest_ask_time last_lowest_ask_time
     *
     * @return $this
     */
    public function setLastLowestAskTime($last_lowest_ask_time)
    {
        $this->container['last_lowest_ask_time'] = $last_lowest_ask_time;

        return $this;
    }

    /**
     * Gets last_highest_bid_time
     *
     * @return int
     */
    public function getLastHighestBidTime()
    {
        return $this->container['last_highest_bid_time'];
    }

    /**
     * Sets last_highest_bid_time
     *
     * @param int $last_highest_bid_time last_highest_bid_time
     *
     * @return $this
     */
    public function setLastHighestBidTime($last_highest_bid_time)
    {
        $this->container['last_highest_bid_time'] = $last_highest_bid_time;

        return $this;
    }

    /**
     * Gets last_sale_date
     *
     * @return string
     */
    public function getLastSaleDate()
    {
        return $this->container['last_sale_date'];
    }

    /**
     * Sets last_sale_date
     *
     * @param string $last_sale_date last_sale_date
     *
     * @return $this
     */
    public function setLastSaleDate($last_sale_date)
    {
        $this->container['last_sale_date'] = $last_sale_date;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets deadstock_sold_rank
     *
     * @return int
     */
    public function getDeadstockSoldRank()
    {
        return $this->container['deadstock_sold_rank'];
    }

    /**
     * Sets deadstock_sold_rank
     *
     * @param int $deadstock_sold_rank deadstock_sold_rank
     *
     * @return $this
     */
    public function setDeadstockSoldRank($deadstock_sold_rank)
    {
        $this->container['deadstock_sold_rank'] = $deadstock_sold_rank;

        return $this;
    }

    /**
     * Gets price_premium_rank
     *
     * @return int
     */
    public function getPricePremiumRank()
    {
        return $this->container['price_premium_rank'];
    }

    /**
     * Sets price_premium_rank
     *
     * @param int $price_premium_rank price_premium_rank
     *
     * @return $this
     */
    public function setPricePremiumRank($price_premium_rank)
    {
        $this->container['price_premium_rank'] = $price_premium_rank;

        return $this;
    }

    /**
     * Gets average_deadstock_price_rank
     *
     * @return int
     */
    public function getAverageDeadstockPriceRank()
    {
        return $this->container['average_deadstock_price_rank'];
    }

    /**
     * Sets average_deadstock_price_rank
     *
     * @param int $average_deadstock_price_rank average_deadstock_price_rank
     *
     * @return $this
     */
    public function setAverageDeadstockPriceRank($average_deadstock_price_rank)
    {
        $this->container['average_deadstock_price_rank'] = $average_deadstock_price_rank;

        return $this;
    }

    /**
     * Gets featured
     *
     * @return string
     */
    public function getFeatured()
    {
        return $this->container['featured'];
    }

    /**
     * Sets featured
     *
     * @param string $featured featured
     *
     * @return $this
     */
    public function setFeatured($featured)
    {
        $this->container['featured'] = $featured;

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

