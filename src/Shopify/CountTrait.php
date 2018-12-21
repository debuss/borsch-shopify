<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RuntimeException;

trait CountTrait
{

    public function count(array $query = null)
    {
        try {
            /** @var Client $client */
            $client = $this->getClient();
            $response = $client->get($this->getEndpoint(null, 'count'), [
                RequestOptions::QUERY => $query,
                RequestOptions::HEADERS => [
                    'X-Shopify-Access-Token' => $this->app_access_token
                ],
                RequestOptions::VERIFY => false
            ]);

            if ($response->getStatusCode() !== 200) {
                return false;
            }

            $result = json_decode($response->getBody()->getContents(), true);
        } catch (RuntimeException $e) {
            return false;
        }

        if ($result === false) {
            return false;
        }

        return $result['count'];
    }
}