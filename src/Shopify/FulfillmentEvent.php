<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class FulfillmentEvent
 *
 * @package Borsch\Shopify
 */
class FulfillmentEvent extends BaseType
{

    /** @see BaseType::$path */
    protected $path = 'fulfillment_events';

    /** @var string */
    public $address1;

    /** @var string */
    public $city;

    /** @var string */
    public $country;

    /** @var string */
    public $created_at;

    /** @var string */
    public $estimated_delivery_at;

    /** @var int|string */
    public $fulfillment_id;

    /** @var string */
    public $happened_at;

    /** @var float */
    public $latitude;

    /** @var float */
    public $longitude;

    /** @var string */
    public $message;

    /** @var int|string */
    public $order_id;

    /** @var string */
    public $province;

    /** @var int|string */
    public $shop_id;

    /** @var string */
    public $status;

    /** @var string */
    public $updated_at;

    /** @var string */
    public $zip;

    /**
     * @param int|null $id
     * @param string ...$extra
     * @return string
     * @throws MissingPropertyException
     */
    protected function getEndpoint($id = null, string ...$extra)
    {
        if (!$this->order_id) {
            throw new MissingPropertyException('You must provide an order_id to use FulfillmentEvent API.');
        }

        if (!$this->fulfillment_id) {
            throw new MissingPropertyException('You must provide a fulfillment_id to use FulfillmentEvent API.');
        }

        $paths = array_merge(
            ['/admin/orders', $this->order_id, 'fulfillments', $this->fulfillment_id, 'events', $this->id ?: $id],
            $extra
        );

        return implode('/', array_filter($paths, 'strlen')).'.json';
    }

    /**
     * @param string $address1
     * @return FulfillmentEvent
     */
    public function address1(string $address1): FulfillmentEvent
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * @param string $city
     * @return FulfillmentEvent
     */
    public function city(string $city): FulfillmentEvent
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param string $country
     * @return FulfillmentEvent
     */
    public function country(string $country): FulfillmentEvent
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param string $created_at
     * @return FulfillmentEvent
     */
    public function createdAt(string $created_at): FulfillmentEvent
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @param string $estimated_delivery_at
     * @return FulfillmentEvent
     */
    public function estimatedDeliveryAt(string $estimated_delivery_at): FulfillmentEvent
    {
        $this->estimated_delivery_at = $estimated_delivery_at;

        return $this;
    }

    /**
     * @param int|string $fulfillment_id
     * @return FulfillmentEvent
     */
    public function fulfillmentId($fulfillment_id)
    {
        $this->fulfillment_id = $fulfillment_id;

        return $this;
    }

    /**
     * @param string $happened_at
     * @return FulfillmentEvent
     */
    public function happenedAt(string $happened_at): FulfillmentEvent
    {
        $this->happened_at = $happened_at;

        return $this;
    }

    /**
     * @param float $latitude
     * @return FulfillmentEvent
     */
    public function latitude(float $latitude): FulfillmentEvent
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @param float $longitude
     * @return FulfillmentEvent
     */
    public function longitude(float $longitude): FulfillmentEvent
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @param string $message
     * @return FulfillmentEvent
     */
    public function message(string $message): FulfillmentEvent
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @param int|string $order_id
     * @return FulfillmentEvent
     */
    public function orderId($order_id)
    {
        $this->order_id = $order_id;

        return $this;
    }

    /**
     * @param string $province
     * @return FulfillmentEvent
     */
    public function province(string $province): FulfillmentEvent
    {
        $this->province = $province;

        return $this;
    }

    /**
     * @param int|string $shop_id
     * @return FulfillmentEvent
     */
    public function shopId($shop_id)
    {
        $this->shop_id = $shop_id;

        return $this;
    }

    /**
     * @param string $status
     * @return FulfillmentEvent
     */
    public function status(string $status): FulfillmentEvent
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param string $updated_at
     * @return FulfillmentEvent
     */
    public function updatedAt(string $updated_at): FulfillmentEvent
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @param string $zip
     * @return FulfillmentEvent
     */
    public function zip(string $zip): FulfillmentEvent
    {
        $this->zip = $zip;

        return $this;
    }
}
