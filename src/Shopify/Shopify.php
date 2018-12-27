<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class Shopify
 *
 * Factory class for Shopify REST Admin API.
 *
 * @package Borsch\Shopify
 */
class Shopify
{

    /** @var string */
    protected static $store;

    /** @var string */
    protected static $access_token;

    /**
     * Initialize Shopify environment with store and access token.
     *
     * @param string $store
     * @param string $access_token
     */
    public static function init(string $store, string $access_token)
    {
        self::$store = $store;
        self::$access_token = $access_token;
    }

    /**
     * @return Balance
     */
    public static function balance(): Balance
    {
        return new Balance(self::$store, self::$access_token);
    }

    /**
     * @return Transactions
     */
    public static function transactions(): Transactions
    {
        return new Transactions(self::$store, self::$access_token);
    }

    /**
     * @return Payouts
     */
    public static function payouts(): Payouts
    {
        return new Payouts(self::$store, self::$access_token);
    }

    /**
     * @return AccessScope
     */
    public static function accessScope(): AccessScope
    {
        return new AccessScope(self::$store, self::$access_token);
    }

    /**
     * @return StorefrontAccessToken
     */
    public static function storefrontAccessToken(): StorefrontAccessToken
    {
        return new StorefrontAccessToken(self::$store, self::$access_token);
    }

    /**
     * @return Customer
     */
    public static function customer(): Customer
    {
        return new Customer(self::$store, self::$access_token);
    }

    /**
     * @return CustomerAddress
     */
    public static function customerAddress(): CustomerAddress
    {
        return new CustomerAddress(self::$store, self::$access_token);
    }

    /**
     * @return Order
     */
    public static function order(): Order
    {
        return new Order(self::$store, self::$access_token);
    }

    /**
     * @return CarrierService
     */
    public static function carrierService(): CarrierService
    {
        return new CarrierService(self::$store, self::$access_token);
    }

    /**
     * @return Product
     */
    public static function product(): Product
    {
        return new Product(self::$store, self::$access_token);
    }

    /**
     * @return ProductVariant
     */
    public static function productVariant(): ProductVariant
    {
        return new ProductVariant(self::$store, self::$access_token);
    }

    /**
     * @return Fulfillment
     */
    public static function fulfillment(): Fulfillment
    {
        return new Fulfillment(self::$store, self::$access_token);
    }

    /**
     * @return FulfillmentEvent
     */
    public static function fulfillmentEvent(): FulfillmentEvent
    {
        return new FulfillmentEvent(self::$store, self::$access_token);
    }

    /**
     * @return FulfillmentService
     */
    public static function fulfillmentService(): FulfillmentService
    {
        return new FulfillmentService(self::$store, self::$access_token);
    }

    /**
     * @return Shop
     */
    public static function shop(): Shop
    {
        return new Shop(self::$store, self::$access_token);
    }

    /**
     * @return ScriptTag
     */
    public static function scriptTag(): ScriptTag
    {
        return new ScriptTag(self::$store, self::$access_token);
    }
}
