<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use InvalidArgumentException;
use RuntimeException;

/**
 * Class BaseType
 *
 * @package Borsch\Shopify
 */
class BaseType
{

    /** @var string */
    protected $store;

    /** @var string */
    protected $app_access_token;

    /** @var string */
    protected $path;

    /** @var int */
    public $id;

    /**
     * BaseType constructor.
     *
     * @param string $store
     * @param string $access_token
     */
    public function __construct(string $store, string $access_token)
    {
        $this->store = $store;
        $this->app_access_token = $access_token;
    }

    /**
     * Remove $store, $app_access_token and $path from dump.
     */
    public function __debugInfo()
    {
        return $this->getRequestData();
    }

    /**
     * @param int|string $id
     * @return $this
     */
    public function id($id)
    {
        $this->id = (string)$id;

        return $this;
    }

    /**
     * Get the index that should contain informations in the response of POST and PUT request.
     *
     * Example, here "carrier_service" :
     *
     * POST /admin/carrier_services.json
     * {
     *     "carrier_service": {
     *          "name": "Shipping Rate Provider",
     *          "callback_url": "http://shippingrateprovider.com",
     *          "service_discovery": true
     *      }
     * }
     *
     * @return string
     */
    protected function getPostDataKey()
    {
        return substr($this->path, 0, -1);
    }

    /**
     * Get data from the class instance.
     *
     * @return array
     */
    protected function getRequestData()
    {
        return array_filter(get_object_vars($this), function ($value, $key) {
            return !in_array($key, ['path', 'store', 'app_access_token']) && $value !== null;
        }, ARRAY_FILTER_USE_BOTH);
    }

    /**
     * @return Client
     * @throws \InvalidArgumentException
     */
    protected function getClient()
    {
        return new Client([
            'base_uri' => 'https://'.$this->store
        ]);
    }

    /**
     * @param int|null $id
     * @param string ...$extra
     * @return string
     */
    protected function getEndpoint($id = null, string ...$extra)
    {
        $paths = array_merge(
            ['/admin', $this->path, $this->id ?: $id],
            $extra
        );

        return implode('/', array_filter($paths, 'strlen')).'.json';
    }

    /**
     * @param string $method
     * @param int|null $id
     * @param array|null $query
     * @param array|null $json
     * @return bool|array
     */
    protected function call(string $method, $id = null, array $query = null, array $json = null)
    {
        try {
            $client = $this->getClient();
            $response = $client->request($method, $this->getEndpoint($id), [
                RequestOptions::QUERY => $query,
                RequestOptions::JSON => $json,
                RequestOptions::HEADERS => [
                    'X-Shopify-Access-Token' => $this->app_access_token
                ],
                RequestOptions::VERIFY => false
            ]);

            if (!in_array($response->getStatusCode(), [200, 201])) {
                return false;
            }

            $result = json_decode($response->getBody()->getContents(), true);
        } catch (GuzzleException $e) {
            return false;
        } catch (InvalidArgumentException $e) {
            return false;
        } catch (RuntimeException $e) {
            return false;
        }

        if ($result === false) {
            return false;
        }

        return $result;
    }

    /**
     * @param int|null $id
     * @param array|null $query
     * @return $this|array|bool
     */
    public function get($id = null, array $query = null)
    {
        $result = $this->call('GET', $id, $query);
        if (!$result) {
            return false;
        }

        // Multiple record, return as Object[]
        if (array_key_exists($this->path, $result) && substr($this->path, -1) == 's') {
            $objects = [];

            foreach ($result[$this->path] as $object) {
                $clone = clone $this;
                foreach ($object as $property => $value) {
                    $clone->{$property} = $value;
                }
                $objects[] = $clone;
            }

            return $objects;
        }

        // Else return $this with set values
        foreach ($result[$this->getPostDataKey()] as $property => $value) {
            $this->{$property} = $value;
        }

        return $this;
    }

    /**
     * @param int|null $id
     * @return $this|bool
     */
    public function post(int $id = null)
    {
        $result = $this->call(
            'POST',
            $id,
            null,
            [$this->getPostDataKey() => $this->getRequestData()]
        );

        if (!$result) {
            return false;
        }

        foreach ($result[$this->getPostDataKey()] as $property => $value) {
            $this->{$property} = $value;
        }

        return $this;
    }

    /**
     * @return $this|bool
     */
    public function put()
    {
        $result = $this->call(
            'PUT',
            null,
            null,
            [$this->getPostDataKey() => $this->getRequestData()]
        );

        if (!$result) {
            return false;
        }

        foreach ($result[$this->getPostDataKey()] as $property => $value) {
            $this->{$property} = $value;
        }

        return $this;
    }

    /**
     * @param int|null $id
     * @return bool
     */
    public function delete(int $id = null)
    {
        $result = $this->call('DELETE', $this->id ?: $id);

        return is_array($result) && !count($result);
    }
}
