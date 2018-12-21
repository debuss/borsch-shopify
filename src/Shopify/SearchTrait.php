<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RuntimeException;

trait SearchTrait
{

    /**
     * @param array|null $query
     * @return $this[]|bool
     */
    public function search(array $query = null)
    {
        /** @var Client $client */
        $client = $this->getClient();
        $response = $client->get($this->getEndpoint(null, 'search'), [
            RequestOptions::QUERY => $query,
            RequestOptions::HEADERS => [
                'X-Shopify-Access-Token' => $this->app_access_token
            ],
            RequestOptions::VERIFY => false
        ]);

        if ($response->getStatusCode() !== 200) {
            return false;
        }

        try {
            $result = json_decode($response->getBody()->getContents(), true);
        } catch (RuntimeException $e) {
            return false;
        }

        if ($result === false) {
            return false;
        }

        // Multiple record, return as Object[]
        if (array_key_exists($this->path, $result)) {
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

        return false;
    }
}
