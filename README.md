*Under development, whole API is not covered yet...*

# Borsch - Shopify

An implementation of Shopify REST API for PHP.

This package is part of the Borsch framework.

## Installation

Via [Composer](https://getcomposer.org/) :
```
$ composer require borsch/shopify 
```

## Usage

In order to use this package you will need to provide your **store address** and **access token** so that API calls can be made.  

```php
require_once __DIR__.'/vendor/autoload.php';

use Borsch\Shopify\Shopify;

// Initialize environment with your store address and access token
Shopify::init(
    'my-awesome-store.myshopify.com',
    '12c74ec231be94c9ee719c9483f330d1'
);
```

Each Shopify API has a class in this package and can be instantiated via Shopify class (factory class) or directly by calling the constructor.
```php
use Borsch\Shopify\Shopify;
use Borsch\Shopify\CarrierService;

$carrier_service = Shopify::carrierService();
// OR
$carrier_service = new CarrierService('my-awesome-store.myshopify.com', '12c74ec231be94c9ee719c9483f330d1');
```

You can then use the class methods to set values and call the API :
```php
// Create a carrier service on Shopify
$carrier_service = Shopify::carrierService()
    ->name('My Carrier Service')
    ->callbackUrl('https://myapp.com')
    ->serviceDiscovery(true)
    ->post();

// We can use it to do POST, PUT or DELETE queries on it
// Let's just rename our carrier service for now
$carrier_service->name('My Awesome Carrier Service')->put();
```

To send or fetch data from Shopify API you need to use the HTTP method corresponding to it:

| Method | Parameters | Details |
|----------|-------------|------|
| `->get()` |  `$id = null, array $query = null` | **Fetch the list from the API.** |
| | |  If the object ID is set by `->id(123456789)` or `$id` is provided, then will return an instance of the class with data fetched from the API. |
| | |  If `$query` is provided, then will return an instance of the class fetched from the API and filtered by `$query`. Example : `GET /admin/orders.json?ids=1073459985` |
| `->post()` |  `int $id = null` | **Create the object.** |
| | |  If the object ID is set by `->id(123456789)` or `$id` is provided, then will return an instance of the class with data from the created object. |
| `->delete()` |  `int $id = null` | **Delete the object.** |
| | |  If the object ID is set by `->id(123456789)` or `$id` is provided, then will return an instance of the class with data from the deleted object. |
| `->put()` |  None | **Update the object.** |

## Examples

#### Create a carrier service

```php
// Create a carrier service on Shopify
$carrier_service = Shopify::carrierService()
    ->name('My Carrier Service')
    ->callbackUrl('https://myapp.com')
    ->serviceDiscovery(true)
    ->post();

// $carrier_service is now an instance of Borsch\Shopify\CarrierService that you just created
// Its properties are filled with the response from Shopify REST API.
// var_dump($carrier_service) will ouput :
// object(Borsch\Shopify\CarrierService)[3]
//     public 'active' => boolean true
//     public 'callback_url' => string 'https://myapp.com' (length=17)
//     public 'carrier_service_type' => string 'api' (length=3)
//     public 'format' => string 'json' (length=4)
//     public 'name' => string 'My Carrier Service' (length=18)
//     public 'service_discovery' => boolean true
//     public 'id' => float 12345678912
```

#### Get all orders

```php
$orders = Shopify::order()->get(null, ['status' => 'any']);

foreach ($orders as $order) {
    /** @var Borsch\Shopify\Order $order */
    $order->email('another-email@gmail.com')->put();
}
```

#### Count products

```php
$total_products = Shopify::product()->count();
```

#### Get Address 1250935701617 from Customer 1089281327217 then update firstname and lastname. 

```php
$address = Shopify::customerAddress()->customerId(1089281327217)->get(1250935701617)
    // Here we have all information fetched from API, let's update
    ->firstName('Samuel')
    ->lastName('de Champlain')
    ->name('Samuel de Champlain')
    ->put();
```

## License

```
MIT License

Copyright (c) 2018 Alexandre DEBUSSCHERE

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
