<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class CarrierService
 *
 * @package Borsch\Shopify
 */
class CarrierService extends BaseType
{

    /** @see BaseType::$path */
    protected $path = 'carrier_services';

    /** @var bool */
    public $active;
    
    /** @var string */
    public $callback_url;
    
    /** @var string */
    public $carrier_service_type;
    
    /** @var string */
    public $format;
    
    /** @var string */
    public $name;
    
    /** @var bool */
    public $service_discovery;

    /**
     * @param bool $active
     * @return CarrierService
     */
    public function active(bool $active): CarrierService
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @param string $callback_url
     * @return CarrierService
     */
    public function callbackUrl(string $callback_url): CarrierService
    {
        $this->callback_url = $callback_url;

        return $this;
    }

    /**
     * @param string $carrier_service_type
     * @return CarrierService
     */
    public function carrierServiceType(string $carrier_service_type): CarrierService
    {
        $this->carrier_service_type = $carrier_service_type;

        return $this;
    }

    /**
     * @param string $format
     * @return CarrierService
     */
    public function format(string $format): CarrierService
    {
        $this->format = $format;

        return $this;
    }

    /**
     * @param string $name
     * @return CarrierService
     */
    public function name(string $name): CarrierService
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param bool $service_discovery
     * @return CarrierService
     */
    public function serviceDiscovery(bool $service_discovery): CarrierService
    {
        $this->service_discovery = $service_discovery;

        return $this;
    }
    
    
}
