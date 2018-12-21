<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class Balance
 *
 * @package Borsch\Shopify
 */
class Balance extends BaseType
{

    /**
     * @param string|null $id
     * @param string ...$extra
     * @return string
     */
    protected function getEndpoint($id = null, string ...$extra)
    {
        return '/admin/shopify_payments/balance.json';
    }

    /**
     * This method does not exist for Balance API.
     * @param int|null $id
     * @return null
     * @ignore
     */
    public function post(int $id = null)
    {
        return null;
    }

    /**
     * This method does not exist for Balance API.
     * @return null
     * @ignore
     */
    public function put()
    {
        return null;
    }

    /**
     * This method does not exist for Balance API.
     * @param int|null $id
     * @return null
     * @ignore
     */
    public function delete(int $id = null)
    {
        return null;
    }
}
