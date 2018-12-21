<?php
/**
 * @author debuss-a
 */

namespace Borsch\Shopify;

/**
 * Class Order
 *
 * @package Borsch\Shopify
 */
class Order extends BaseType
{

    use CountTrait, OpenTrait, CloseTrait, CancelTrait;

    /** @see BaseType::$path */
    protected $path = 'orders';

    public $app_id;
    public $billing_address;
    public $browser_ip ;
    public $buyer_accepts_marketing;
    public $cancel_reason;
    public $cancelled_at ;
    public $cart_token ;
    public $client_details ;
    public $closed_at ;
    public $created_at ;
    public $currency;
    public $customer;
    public $customer_locale;
    public $discount_applications;
    public $discount_codes;
    public $email;
    public $financial_status;
    public $fulfillments;
    public $fulfillment_status;
    public $gateway;
    public $landing_site;
    public $line_items;
    public $location_id;
    public $name;
    public $note;
    public $note_attributes;
    public $number;
    public $order_number;
    public $payment_details;
    public $payment_gateway_names;
    public $presentment_currency;
    public $processed_at;
    public $processing_method;
    public $referring_site;
    public $refunds;
    public $shipping_address;
    public $shipping_lines;
    public $source_name;
    public $subtotal_price;
    public $subtotal_price_set;
    public $tags;
    public $tax_lines;
    public $taxes_included;
    public $test;
    public $token;
    public $total_discounts;
    public $total_discounts_set;
    public $total_line_items_price;
    public $total_line_items_price_set;
    public $total_price;
    public $total_price_set;
    public $total_tax;
    public $total_tax_set;
    public $total_tip_received;
    public $total_weight;
    public $updated_at;
    public $user_id;
    public $order_status_url;

    /**
     * @param mixed $app_id
     * @return Order
     */
    public function appId($app_id)
    {
        $this->app_id = $app_id;

        return $this;
    }

    /**
     * @param mixed $billing_address
     * @return Order
     */
    public function billingAddress($billing_address)
    {
        $this->billing_address = $billing_address;

        return $this;
    }

    /**
     * @param mixed $buyer_accepts_marketing
     * @return Order
     */
    public function buyerAcceptsMarketing($buyer_accepts_marketing)
    {
        $this->buyer_accepts_marketing = $buyer_accepts_marketing;

        return $this;
    }

    /**
     * @param mixed $cancel_reason
     * @return Order
     */
    public function cancelReason($cancel_reason)
    {
        $this->cancel_reason = $cancel_reason;

        return $this;
    }

    /**
     * @param mixed $currency
     * @return Order
     */
    public function currency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param mixed $customer
     * @return Order
     */
    public function customer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @param mixed $discount_codes
     * @return Order
     */
    public function discountCodes($discount_codes)
    {
        $this->discount_codes = $discount_codes;

        return $this;
    }

    /**
     * @param mixed $email
     * @return Order
     */
    public function email($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param mixed $financial_status
     * @return Order
     */
    public function financialStatus($financial_status)
    {
        $this->financial_status = $financial_status;

        return $this;
    }

    /**
     * @param mixed $fulfillments
     * @return Order
     */
    public function fulfillments($fulfillments)
    {
        $this->fulfillments = $fulfillments;

        return $this;
    }

    /**
     * @param mixed $fulfillment_status
     * @return Order
     */
    public function fulfillmentStatus($fulfillment_status)
    {
        $this->fulfillment_status = $fulfillment_status;

        return $this;
    }

    /**
     * @param mixed $gateway
     * @return Order
     */
    public function gateway($gateway)
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * @param mixed $location_id
     * @return Order
     */
    public function locationId($location_id)
    {
        $this->location_id = $location_id;

        return $this;
    }

    /**
     * @param mixed $note
     * @return Order
     */
    public function note($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * @param mixed $note_attributes
     * @return Order
     */
    public function noteAttributes($note_attributes)
    {
        $this->note_attributes = $note_attributes;

        return $this;
    }

    /**
     * @param mixed $payment_details
     * @return Order
     */
    public function paymentDetails($payment_details)
    {
        $this->payment_details = $payment_details;

        return $this;
    }

    /**
     * @param mixed $presentment_currency
     * @return Order
     */
    public function presentmentCurrency($presentment_currency)
    {
        $this->presentment_currency = $presentment_currency;

        return $this;
    }

    /**
     * @param mixed $processed_at
     * @return Order
     */
    public function processedAt($processed_at)
    {
        $this->processed_at = $processed_at;

        return $this;
    }

    /**
     * @param mixed $referring_site
     * @return Order
     */
    public function referringSite($referring_site)
    {
        $this->referring_site = $referring_site;

        return $this;
    }

    /**
     * @param mixed $shipping_address
     * @return Order
     */
    public function shippingAddress($shipping_address)
    {
        $this->shipping_address = $shipping_address;

        return $this;
    }

    /**
     * @param mixed $shipping_lines
     * @return Order
     */
    public function shippingLines($shipping_lines)
    {
        $this->shipping_lines = $shipping_lines;

        return $this;
    }

    /**
     * @param mixed $source_name
     * @return Order
     */
    public function sourceName($source_name)
    {
        $this->source_name = $source_name;

        return $this;
    }

    /**
     * @param mixed $subtotal_price
     * @return Order
     */
    public function subtotalPrice($subtotal_price)
    {
        $this->subtotal_price = $subtotal_price;

        return $this;
    }

    /**
     * @param mixed $subtotal_price_set
     * @return Order
     */
    public function subtotalPriceSet($subtotal_price_set)
    {
        $this->subtotal_price_set = $subtotal_price_set;

        return $this;
    }

    /**
     * @param mixed $tags
     * @return Order
     */
    public function tags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * @param mixed $tax_lines
     * @return Order
     */
    public function taxLines($tax_lines)
    {
        $this->tax_lines = $tax_lines;

        return $this;
    }

    /**
     * @param mixed $taxes_included
     * @return Order
     */
    public function taxesIncluded($taxes_included)
    {
        $this->taxes_included = $taxes_included;

        return $this;
    }

    /**
     * @param mixed $test
     * @return Order
     */
    public function test($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @param mixed $total_discounts
     * @return Order
     */
    public function totalDiscounts($total_discounts)
    {
        $this->total_discounts = $total_discounts;

        return $this;
    }

    /**
     * @param mixed $total_discounts_set
     * @return Order
     */
    public function totalDiscountsSet($total_discounts_set)
    {
        $this->total_discounts_set = $total_discounts_set;

        return $this;
    }

    /**
     * @param mixed $total_line_items_price
     * @return Order
     */
    public function totalLineItemsPrice($total_line_items_price)
    {
        $this->total_line_items_price = $total_line_items_price;

        return $this;
    }

    /**
     * @param mixed $total_line_items_price_set
     * @return Order
     */
    public function totalLineItemsPriceSet($total_line_items_price_set)
    {
        $this->total_line_items_price_set = $total_line_items_price_set;

        return $this;
    }

    /**
     * @param mixed $total_price
     * @return Order
     */
    public function totalPrice($total_price)
    {
        $this->total_price = $total_price;

        return $this;
    }

    /**
     * @param mixed $total_price_set
     * @return Order
     */
    public function totalPriceSet($total_price_set)
    {
        $this->total_price_set = $total_price_set;

        return $this;
    }

    /**
     * @param mixed $total_tax
     * @return Order
     */
    public function totalTax($total_tax)
    {
        $this->total_tax = $total_tax;

        return $this;
    }

    /**
     * @param mixed $total_tax_set
     * @return Order
     */
    public function totalTaxSet($total_tax_set)
    {
        $this->total_tax_set = $total_tax_set;

        return $this;
    }

    /**
     * @param mixed $total_tip_received
     * @return Order
     */
    public function totalTipReceived($total_tip_received)
    {
        $this->total_tip_received = $total_tip_received;

        return $this;
    }

    /**
     * @param mixed $total_weight
     * @return Order
     */
    public function totalWeight($total_weight)
    {
        $this->total_weight = $total_weight;

        return $this;
    }

    /**
     * @param mixed $user_id
     * @return Order
     */
    public function userId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }
}