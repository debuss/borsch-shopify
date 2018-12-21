<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class Shop
 *
 * @package Borsch\Shopify
 */
class Shop extends BaseType
{

    /** @see BaseType::$path */
    protected $path = 'shop';

    public $address1;
    public $address2;
    public $city;
    public $country;
    public $country_code;
    public $country_name;
    public $created_at;
    public $updated_at;
    public $customer_email;
    public $domain;
    public $enabled_presentment_currencies;
    public $email;
    public $google_apps_domain;
    public $google_apps_login_enabled;
    public $latitude;
    public $longitude;
    public $money_format;
    public $money_with_currency_format;
    public $weight_unit;
    public $myshopify_domain;
    public $name;
    public $plan_name;
    public $has_discounts;
    public $has_gift_cards;
    public $plan_display_name;
    public $password_enabled;
    public $pre_launch_enabled;
    public $phone;
    public $primary_locale;
    public $province;
    public $province_code;
    public $shop_owner;
    public $source;
    public $force_ssl;
    public $tax_shipping;
    public $taxes_included;
    public $county_taxes;
    public $timezone;
    public $iana_timezone;
    public $zip;
    public $has_storefront;
    public $setup_required;
    public $checkout_api_supported;
    public $multi_location_enabled;

    /**
     * @return string
     */
    protected function getPostDataKey()
    {
        return $this->path;
    }

    /**
     * This method does not exist for Balance API.
     * @param int|null $id
     * @return bool|BaseType|null
     */
    public function post(int $id = null)
    {
        return null;
    }

    /**
     * This method does not exist for Balance API.
     * @return bool|BaseType|null
     */
    public function put()
    {
        return null;
    }

    /**
     * This method does not exist for Balance API.
     * @param int|null $id
     * @return bool|null
     */
    public function delete(int $id = null)
    {
        return null;
    }
}
