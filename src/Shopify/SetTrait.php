<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 12/21/2018
 * Time: 2:09 PM
 */

namespace Borsch\Shopify;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RuntimeException;

trait SetTrait
{

    public function set(array $query = null)
    {
        try {
            /** @var Client $client */
            $client = $this->getClient();
            $response = $client->put($this->getEndpoint(null, 'set'), [
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

        return $result !== false;
    }
}