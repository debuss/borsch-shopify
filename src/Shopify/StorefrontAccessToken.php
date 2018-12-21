<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

/**
 * Class StorefrontAccessToken
 *
 * @package Borsch\Shopify
 */
class StorefrontAccessToken extends BaseType
{

    /** @see BaseType::$path */
    protected $path = 'storefront_access_token';

    /** @var string */
    public $access_token;

    /** @var string */
    public $access_scope;

    /** @var string */
    public $created_at;

    /** @var string */
    public $title;

    /**
     * @param string $title
     * @return StorefrontAccessToken
     */
    public function title(string $title): StorefrontAccessToken
    {
        $this->title = $title;

        return $this;
    }
}
