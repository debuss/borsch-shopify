<?php
/**
 * @author    Alexandre D.
 */

namespace Borsch\Shopify;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;
use RuntimeException;

trait OpenTrait
{

    /**
     * @param null|int|string $id
     * @return $this|bool
     * @throws MissingPropertyException
     */
    public function open($id = null)
    {
        if (!($this->id ?: $id)) {
            throw new MissingPropertyException(sprintf(
                'You must provide an id to use %s method.',
                __METHOD__
            ));
        }

        /** @var Client $client */
        $client = $this->getClient();
        $response = $client->get($this->getEndpoint(null, 'open'), [
            RequestOptions::JSON => [],
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

        foreach ($result[$this->getPostDataKey()] as $property => $value) {
            $this->{$property} = $value;
        }

        return $this;
    }
}
