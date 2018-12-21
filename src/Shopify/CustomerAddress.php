<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class CustomerAddress
 *
 * @package Borsch\Shopify
 */
class CustomerAddress extends BaseType
{

    use DefaultTrait, SetTrait;

    /** @see BaseType::$path */
    protected $path = 'addresses';

    public $address1;
    public $address2;
    public $city;
    public $country;
    public $country_code;
    public $country_name;
    public $company;
    public $customer_id;
    public $default;
    public $first_name;
    public $last_name;
    public $name;
    public $phone;
    public $province;
    public $province_code;
    public $zip;

    /**
     * @return string
     */
    protected function getPostDataKey()
    {
        return 'customer_address';
    }

    /**
     * @param int|null $id
     * @param string ...$extra
     * @return string
     * @throws MissingPropertyException
     */
    protected function getEndpoint($id = null, string ...$extra)
    {
        if (!$this->customer_id) {
            throw new MissingPropertyException('You must provide a customer_id to use CustomerAddress API.');
        }

        $paths = array_merge(
            ['/admin/customers', $this->customer_id, $this->path, $this->id ?: $id],
            $extra
        );

        return implode('/', array_filter($paths, 'strlen')).'.json';
    }

    /**
     * @param mixed $address1
     * @return CustomerAddress
     */
    public function address1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * @param mixed $address2
     * @return CustomerAddress
     */
    public function address2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * @param mixed $city
     * @return CustomerAddress
     */
    public function city($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param mixed $country
     * @return CustomerAddress
     */
    public function country($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param mixed $country_code
     * @return CustomerAddress
     */
    public function countryCode($country_code)
    {
        $this->country_code = $country_code;

        return $this;
    }

    /**
     * @param mixed $country_name
     * @return CustomerAddress
     */
    public function countryName($country_name)
    {
        $this->country_name = $country_name;

        return $this;
    }

    /**
     * @param mixed $company
     * @return CustomerAddress
     */
    public function company($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * @param mixed $customer_id
     * @return CustomerAddress
     */
    public function customerId($customer_id)
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    /**
     * @param mixed $first_name
     * @return CustomerAddress
     */
    public function firstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * @param mixed $last_name
     * @return CustomerAddress
     */
    public function lastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * @param mixed $name
     * @return CustomerAddress
     */
    public function name($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $phone
     * @return CustomerAddress
     */
    public function phone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param mixed $province
     * @return CustomerAddress
     */
    public function province($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * @param mixed $province_code
     * @return CustomerAddress
     */
    public function provinceCode($province_code)
    {
        $this->province_code = $province_code;

        return $this;
    }

    /**
     * @param mixed $zip
     * @return CustomerAddress
     */
    public function zip($zip)
    {
        $this->zip = $zip;

        return $this;
    }
}
