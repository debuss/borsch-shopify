<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class AccessScope
 *
 * @package Borsch\Shopify
 */
class AccessScope extends BaseType
{

    protected $path = 'access_scopes';

    /**
     * @param string|null $id
     * @param string ...$extra
     * @return string
     */
    protected function getEndpoint($id = null, string ...$extra)
    {
        return '/admin/oauth/access_scopes.json';
    }

    /**
     * @param null $id
     * @param array|null $query
     * @return array
     */
    public function get($id = null, array $query = null)
    {
        return array_map(function ($access_scope) {
            return $access_scope->handle;
        }, parent::get($id, $query));
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
