<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class FulfillmentService
 *
 * @package Borsch\Shopify
 */
class FulfillmentService extends BaseType
{

    /** @see BaseType::$path */
    protected $path = 'fulfillment_services';

    /** @var string */
    public $callback_url;

    /** @var string */
    public $format;

    /** @var string */
    public $handle;

    /** @var bool */
    public $inventory_management;

    /** @var int|string */
    public $location_id;

    /** @var string */
    public $name;

    /** @var string */
    public $provider_id;

    /** @var bool */
    public $requires_shipping_method;

    /** @var bool */
    public $tracking_support;

    /**
     * @param string $callback_url
     * @return FulfillmentService
     */
    public function callbackUrl(string $callback_url): FulfillmentService
    {
        $this->callback_url = $callback_url;

        return $this;
    }

    /**
     * @param string $format
     * @return FulfillmentService
     */
    public function format(string $format): FulfillmentService
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @param string $handle
     * @return FulfillmentService
     */
    public function handle(string $handle): FulfillmentService
    {
        $this->handle = $handle;

        return $this;
    }

    /**
     * @param bool $inventory_management
     * @return FulfillmentService
     */
    public function inventoryManagement(bool $inventory_management): FulfillmentService
    {
        $this->inventory_management = $inventory_management;

        return $this;
    }

    /**
     * @param int|string $location_id
     * @return FulfillmentService
     */
    public function locationId($location_id)
    {
        $this->location_id = $location_id;

        return $this;
    }

    /**
     * @param string $name
     * @return FulfillmentService
     */
    public function name(string $name): FulfillmentService
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $provider_id
     * @return FulfillmentService
     */
    public function providerId(string $provider_id): FulfillmentService
    {
        $this->provider_id = $provider_id;

        return $this;
    }

    /**
     * @param bool $requires_shipping_method
     * @return FulfillmentService
     */
    public function requiresShippingMethod(bool $requires_shipping_method): FulfillmentService
    {
        $this->requires_shipping_method = $requires_shipping_method;

        return $this;
    }

    /**
     * @param bool $tracking_support
     * @return FulfillmentService
     */
    public function trackingSupport(bool $tracking_support): FulfillmentService
    {
        $this->tracking_support = $tracking_support;

        return $this;
    }
}
