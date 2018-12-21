<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class Transactions
 *
 * @package Borsch\Shopify
 */
class Transactions extends BaseType
{

    /** @see BaseType::$path */
    protected $path = 'transactions';

    /** @var string */
    public $type;

    /** @var bool */
    public $test;

    /** @var int|string */
    public $payout_id;

    /** @var string */
    public $payout_status;

    /** @var string */
    public $currency;

    /** @var float|string */
    public $amount;

    /** @var float|string */
    public $fee;

    /** @var float|string */
    public $net;

    /** @var int|string */
    public $source_id;

    /** @var string */
    public $source_type;

    /** @var int|string */
    public $source_order_transaction_id;

    /** @var int|string */
    public $source_order_id;

    /** @var string */
    public $processed_at;

    /**
     * @param null $id
     * @param string ...$extra
     * @return string
     */
    protected function getEndpoint($id = null, string ...$extra)
    {
        return '/admin/shopify_payments/balance/transactions.json';
    }

    /**
     * @param string $type
     * @return Transactions
     */
    public function type(string $type): Transactions
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param bool $test
     * @return Transactions
     */
    public function test(bool $test): Transactions
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @param int|string $payout_id
     * @return Transactions
     */
    public function payoutId($payout_id)
    {
        $this->payout_id = $payout_id;

        return $this;
    }

    /**
     * @param string $payout_status
     * @return Transactions
     */
    public function payoutStatus(string $payout_status): Transactions
    {
        $this->payout_status = $payout_status;

        return $this;
    }

    /**
     * @param string $currency
     * @return Transactions
     */
    public function currency(string $currency): Transactions
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param float|string $amount
     * @return Transactions
     */
    public function amount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @param float|string $fee
     * @return Transactions
     */
    public function fee($fee)
    {
        $this->fee = $fee;

        return $this;
    }

    /**
     * @param float|string $net
     * @return Transactions
     */
    public function net($net)
    {
        $this->net = $net;

        return $this;
    }

    /**
     * @param int|string $source_id
     * @return Transactions
     */
    public function sourceId($source_id)
    {
        $this->source_id = $source_id;

        return $this;
    }

    /**
     * @param string $source_type
     * @return Transactions
     */
    public function sourceType(string $source_type): Transactions
    {
        $this->source_type = $source_type;

        return $this;
    }

    /**
     * @param int|string $source_order_transaction_id
     * @return Transactions
     */
    public function sourceOrderTransactionId($source_order_transaction_id)
    {
        $this->source_order_transaction_id = $source_order_transaction_id;

        return $this;
    }

    /**
     * @param int|string $source_order_id
     * @return Transactions
     */
    public function sourceOrderId($source_order_id)
    {
        $this->source_order_id = $source_order_id;

        return $this;
    }

    /**
     * @param string $processed_at
     * @return Transactions
     */
    public function processedAt(string $processed_at): Transactions
    {
        $this->processed_at = $processed_at;

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
