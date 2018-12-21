<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class Payouts
 *
 * @package Borsch\Shopify
 */
class Payouts extends BaseType
{

    /** @see BaseType::$path */
    protected $path = 'payouts';

    /** @var string */
    public $status;

    /** @var string */
    public $date;

    /** @var string */
    public $currency;

    /** @var string|float */
    public $amount;

    /**
     * @param null $id
     * @param string ...$extra
     * @return string
     */
    protected function getEndpoint($id = null, string ...$extra)
    {
        $paths = ['/admin', 'shopify_payments', $this->path, $this->id ?: $id];

        return implode('/', array_filter($paths, 'strlen')).'.json';
    }

    /**
     * @param string $status
     * @return Payouts
     */
    public function status(string $status): Payouts
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param string $date
     * @return Payouts
     */
    public function date(string $date): Payouts
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @param string $currency
     * @return Payouts
     */
    public function currency(string $currency): Payouts
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param float|string $amount
     * @return Payouts
     */
    public function amount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * This method does not exist for Payouts API.
     * @param int|null $id
     * @return null
     * @ignore
     */
    public function post(int $id = null)
    {
        return null;
    }

    /**
     * This method does not exist for Payouts API.
     * @return null
     * @ignore
     */
    public function put()
    {
        return null;
    }

    /**
     * This method does not exist for Payouts API.
     * @param int|null $id
     * @return null
     * @ignore
     */
    public function delete(int $id = null)
    {
        return null;
    }
}
