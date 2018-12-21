<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class Fulfillment
 *
 * @package Borsch\Shopify
 */
class Fulfillment extends BaseType
{

    use CountTrait, CompleteTrait, OpenTrait, CancelTrait;

    /** @see BaseType::$path */
    protected $path = 'fulfillments';

    /** @var string */
    public $created_at;

    /** @var array */
    public $line_items;

    /** @var int|string */
    public $location_id;

    /** @var string */
    public $name;

    /** @var bool */
    public $notify_customer;

    /** @var int|string */
    public $order_id;

    /** @var array */
    public $receipt;

    /** @var string */
    public $service;

    /** @var string */
    public $shipment_status;

    /** @var string */
    public $status;

    /** @var string */
    public $tracking_company;

    /** @var string[] */
    public $tracking_numbers;

    /** @var array */
    public $tracking_urls;

    /** @var string */
    public $updated_at;

    /** @var string */
    public $variant_inventory_management;

    /**
     * @param int|null $id
     * @param string ...$extra
     * @return string
     * @throws MissingPropertyException
     */
    protected function getEndpoint($id = null, string ...$extra)
    {
        if (!$this->order_id) {
            throw new MissingPropertyException('You must provide an order_id to use Fulfillment API.');
        }

        $paths = array_merge(
            ['/admin/orders', $this->order_id, $this->path, $this->id ?: $id],
            $extra
        );

        return implode('/', array_filter($paths, 'strlen')).'.json';
    }

    /**
     * @param string $created_at
     * @return Fulfillment
     */
    public function createdAt(string $created_at): Fulfillment
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @param array $line_items
     * @return Fulfillment
     */
    public function lineItems(array $line_items): Fulfillment
    {
        $this->line_items = $line_items;

        return $this;
    }

    /**
     * @param int|string $location_id
     * @return Fulfillment
     */
    public function locationId($location_id)
    {
        $this->location_id = $location_id;

        return $this;
    }

    /**
     * @param string $name
     * @return Fulfillment
     */
    public function name(string $name): Fulfillment
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param bool $notify_customer
     * @return Fulfillment
     */
    public function notifyCustomer(bool $notify_customer): Fulfillment
    {
        $this->notify_customer = $notify_customer;

        return $this;
    }

    /**
     * @param int|string $order_id
     * @return Fulfillment
     */
    public function orderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * @param array $receipt
     * @return Fulfillment
     */
    public function receipt(array $receipt): Fulfillment
    {
        $this->receipt = $receipt;

        return $this;
    }

    /**
     * @param string $service
     * @return Fulfillment
     */
    public function service(string $service): Fulfillment
    {
        $this->service = $service;

        return $this;
    }

    /**
     * @param string $shipment_status
     * @return Fulfillment
     */
    public function shipmentStatus(string $shipment_status): Fulfillment
    {
        $this->shipment_status = $shipment_status;

        return $this;
    }

    /**
     * @param string $status
     * @return Fulfillment
     */
    public function status(string $status): Fulfillment
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param string $tracking_company
     * @return Fulfillment
     */
    public function trackingCompany(string $tracking_company): Fulfillment
    {
        $this->tracking_company = $tracking_company;

        return $this;
    }

    /**
     * @param string[] $tracking_numbers
     * @return Fulfillment
     */
    public function trackingNumbers(array $tracking_numbers): Fulfillment
    {
        $this->tracking_numbers = $tracking_numbers;

        return $this;
    }

    /**
     * @param array $tracking_urls
     * @return Fulfillment
     */
    public function trackingUrls(array $tracking_urls): Fulfillment
    {
        $this->tracking_urls = $tracking_urls;

        return $this;
    }

    /**
     * @param string $updated_at
     * @return Fulfillment
     */
    public function updatedAt(string $updated_at): Fulfillment
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @param string $variant_inventory_management
     * @return Fulfillment
     */
    public function variantInventoryManagement(string $variant_inventory_management): Fulfillment
    {
        $this->variant_inventory_management = $variant_inventory_management;

        return $this;
    }
}
