<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RuntimeException;

trait DefaultTrait
{

    public function default($id = null)
    {
        try {
            /** @var Client $client */
            $client = $this->getClient();
            $response = $client->put($this->getEndpoint($id, 'default'), [
                RequestOptions::JSON => [],
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

        return $result !== false;
    }
}