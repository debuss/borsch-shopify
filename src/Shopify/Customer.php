<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class Customer
 *
 * @package Borsch\Shopify
 */
class Customer extends BaseType
{

    use CountTrait, SearchTrait;

    /** @see BaseType::$path */
    protected $path = 'customers';

    public $accepts_marketing;
    public $addresses;
    public $currency ;
    public $created_at;
    public $default_address;
    public $email;
    public $first_name;
    public $last_name;
    public $last_order_id;
    public $last_order_name;
    public $metafield;
    public $multipass_identifier;
    public $note;
    public $orders_count;
    public $phone;
    public $state;
    public $tags;
    public $tax_exempt;
    public $total_spent;
    public $updated_at;
    public $verified_email;

    /**
     * @param mixed $accepts_marketing
     * @return Customer
     */
    public function acceptsMarketing($accepts_marketing)
    {
        $this->accepts_marketing = $accepts_marketing;

        return $this;
    }

    /**
     * @param mixed $addresses
     * @return Customer
     */
    public function addresses($addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * @param mixed $currency
     * @return Customer
     */
    public function currency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param mixed $created_at
     * @return Customer
     */
    public function createdAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @param mixed $default_address
     * @return Customer
     */
    public function defaultAddress($default_address)
    {
        $this->default_address = $default_address;

        return $this;
    }

    /**
     * @param mixed $email
     * @return Customer
     */
    public function email($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param mixed $first_name
     * @return Customer
     */
    public function firstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @param mixed $last_name
     * @return Customer
     */
    public function lastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @param mixed $last_order_id
     * @return Customer
     */
    public function lastOrderId($last_order_id)
    {
        $this->last_order_id = $last_order_id;

        return $this;
    }

    /**
     * @param mixed $last_order_name
     * @return Customer
     */
    public function lastOrderName($last_order_name)
    {
        $this->last_order_name = $last_order_name;

        return $this;
    }

    /**
     * @param mixed $metafield
     * @return Customer
     */
    public function metafield($metafield)
    {
        $this->metafield = $metafield;

        return $this;
    }

    /**
     * @param mixed $multipass_identifier
     * @return Customer
     */
    public function multipassIdentifier($multipass_identifier)
    {
        $this->multipass_identifier = $multipass_identifier;

        return $this;
    }

    /**
     * @param mixed $note
     * @return Customer
     */
    public function note($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @param mixed $orders_count
     * @return Customer
     */
    public function ordersCount($orders_count)
    {
        $this->orders_count = $orders_count;

        return $this;
    }

    /**
     * @param mixed $phone
     * @return Customer
     */
    public function phone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param mixed $state
     * @return Customer
     */
    public function state($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @param mixed $tags
     * @return Customer
     */
    public function tags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @param mixed $tax_exempt
     * @return Customer
     */
    public function taxExempt($tax_exempt)
    {
        $this->tax_exempt = $tax_exempt;

        return $this;
    }

    /**
     * @param mixed $total_spent
     * @return Customer
     */
    public function totalSpent($total_spent)
    {
        $this->total_spent = $total_spent;

        return $this;
    }

    /**
     * @param mixed $updated_at
     * @return Customer
     */
    public function updatedAt($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    /**
     * @param mixed $verified_email
     * @return Customer
     */
    public function verifiedEmail($verified_email)
    {
        $this->verified_email = $verified_email;

        return $this;
    }
}
