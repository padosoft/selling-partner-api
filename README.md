# Selling Partner API for PHP
A PHP library for connecting to Amazon's [Selling Partner API](https://github.com/amzn/selling-partner-api-docs/). This library is *not* for connecting to Amazon's older MWS API---if that's what you need, check out [glassfrogbooks/php-amazon-mws](https://github.com/glassfrogbooks/phpAmazonMWS).

This package is partially generated by the [OpenAPITools generator](https://github.com/OpenAPITools/openapi-generator).

## Requirements

* PHP 7.2 or later
* Composer

## Installation

To install the bindings via [Composer](http://getcomposer.org/), run `composer require jlevers/selling-partner-api` inside your project directory.

## Getting Started

### Prerequisites

You need a few things to get started:
* A Selling Partner API developer account
* An AWS IAM user configured for use with the Selling Partner API
* A fresh Selling Partner API application

If you're looking for more information on how to set those things up, check out [this blog post](https://jesseevers.com/selling-partner-api-access/). It provides a detailed walkthrough of the whole setup process.


### Configuration

Copy the sample configuration file to the root of your project: `cp vendor/jlevers/selling-partner-api/.env.example .env`

Then, fill in the environment variables in `.env` with your IAM user credentials and the LWA credentials from your application. For more information on where to get those credentials, check out [this blog post](https://jesseevers.com/spapi-php-library/#installation-and-configuration).

### Basic Usage

This example assumes you have access to the `Seller Insights` Selling Partner API role, but the general format applies to any Selling Partner API request.

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api = new SellingPartnerApi\Api\SellersApi();
try {
    $result = $api->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Endpoints

All endpoint URIs are relative to the `SPAPI_ENDPOINT` value you specify in your `.env` file (the default is https://sellingpartnerapi-na.amazon.com). For instance, the `SellersApi::getMarketplaceParticipations()` endpoint, `/sellers/v1/marketplaceParticipations`, is expanded to `https://sellingpartnerapi-na.amazon.com/sellers/v1/marketplaceParticipations`.
    
The [`docs/Api/`](https://github.com/jlevers/selling-partner-api/tree/main/docs/Api) directory contains the documentation for interacting each distinct section of the Selling Partner API. Those sections are referred to as **APIs** throughout the documentation---you can think of the Selling Partner API as having many sub-APIs, where each sub-API has a number of endpoints that provide closely related functionality.

Endpoint methods that perform `POST`, `PUT`, and `DELETE` requests typically take some model as a parameter, and nearly all endpoint methods return a model with result information. For instance, [`ShippingApi::createShipment()`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ShippingApi.md#createShipment) takes an instance of the [`CreateShipmentRequest`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Model/Shipping/CreateShipmentRequest.md) model as its only argument, and returns an instance of the [`CreateShipmentResponse`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Model/Shipping/CreateShipmentResponse.md) model.

See the `Models` section below for more information about models.

## Models

Each endpoint has one or more models associated with it. These models are classes that contain the data needed to make a certain kind of request to the API, or contain the data returned by a given request type. All of the models share the same general interface: you can either specify all the model's attributes during initialization, or use setter methods to set each attribute after the fact. Here's an example using the Service API's `Buyer` model ([docs](https://github.com/jlevers/selling-partner-api/blob/main/docs/Model/Service/Buyer.md), ([source](https://github.com/jlevers/selling-partner-api/blob/main/lib/Model/Service/Buyer.php)).

The `Buyer` model has four attributes: `buyer_id`, `name`, `phone`, and `is_prime_member`. (If you're wondering how you would figure out which attributes the model has on your own, check out the `docs` link above.) To create an instance of the `Buyer` model with all those attributes set:

```php
$buyer = new SellingPartnerApi\Model\Service\Buyer([
    "buyer_id" => "ABCDEFGHIJKLMNOPQRSTU0123456",
    "name" => "Jane Doe",
    "phone" => "+12345678901",
    "is_prime_member" => true
]);
```

Alternatively, you can create an instance of the `Buyer` model and then populate its fields:

``` php
$buyer = new SellingPartnerApi\Model\Service\Buyer();
$buyer->setBuyerId("ABCDEFGHIJKLMNOPQRSTU0123456");
$buyer->setName("Jane Doe");
$buyer->setPhone("+12345678901");
$buyer->setIsPrimeMember(true);
```

Each model also has the getter methods you might expect:

``` php
$buyer->getBuyerId();        // -> "ABCDEFGHIJKLMNOPQRSTU0123456"
$buyer->getName();           // -> "Jane Doe"
$buyer->getPhone();          // -> "+12345678901"
$buyer->getIsPrimeMember();  // -> true
```

Models can (and usually do) have other models as attributes:

``` php
$serviceJob = new SellingPartnerApi\Model\Service\Buyer([
    // ...
    "buyer" => $buyer,
    // ...
]);

$serviceJob->getBuyer();             // -> [Buyer instance]
$serviceJob->getBuyer()->getName();  // -> "Jane Doe"
```

## Dynamic credentials
If you are writing an app for the Marketplace Appstore, you will need to connect to the Selling Partner API with an arbitrary number of different sets of credentials. There's an easy way to do that: just specify a custom [`Configuration`](https://github.com/jlevers/selling-partner-api/blob/main/lib/Configuration.php) instance when you create an API object.

The `Configuration` constructor takes an array of options:
* `refreshToken (string)`: An SP API refresh token
* `onUpdateCreds (callable)`: A callback function to call when a new access token is generated. The function should accept a single argument of type [`Credentials`](https://github.com/jlevers/selling-partner-api/blob/main/lib/Credentials.php).
* `lwaClientId (string)`: The LWA client ID of the SP API application to use to execute API requests
* `lwaClientSecret (string)`: The LWA client secret of the SP API application to use to execute API requests

All array items are optional, but `lwaClientId` and `lwaClientSecret` must always be given together. If only one of those two options is provided, the `Configuration` constructor will throw an exception. 

### Example
``` php
$config = new SellingPartnerApi\Configuration([
    "refreshToken" => "Aztr|WeBxxx....xxx",
    "onUpdateCreds" => function(SellingPartnerApi\Credentials $creds) {
        print_r($creds);
    },
    "lwaClientId" => "AKIAxxxxxxxxxxxxxxxxx",
    "lwaClientSecret" => "a8e5xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxe46c"
]);
$api = new SellingPartnerApi\Api\SellersApi($config);
// Now you can make calls using $api, which will use the credentials specified in $config
```

## Uploading and downloading documents
The Feeds and Reports APIs include operations that involve uploading and downloading documents to and from Amazon. Amazon encrypts all documents they generate, and requires that all uploaded documents be encrypted. The `SellingPartnerApi\Document` class handles all the encryption/decryption, given an instance of one of the `Model\Reports\ReportDocument`, `Model\Feeds\FeedDocument`, or `Model\Feeds\CreateFeedDocumentResponse` classes. Instances of those classes are in the response returned by Amazon when you make a call to the [`getReportDocument`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/ReportsApi.md#getReportDocument), [`getFeedDocument`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeedsApi.md#getFeedDocument), and [`createFeedDocument`](https://github.com/jlevers/selling-partner-api/blob/main/docs/Api/FeedsApi.md#createFeedDocument) endpoints, respectively.

### Downloading a report document

``` php
use SellingPartnerApi;

// Assume we've already fetched a report document ID
$documentId = "foo.1234";
$reportsApi = new Api\ReportsApi();
$reportDocumentInfo = $reportsApi->getReportDocument($documentId);

// Pass the content type of the report you're fetching
$docToDownload = new Document($reportDocumentInfo->getPayload(), "text/tab-separated-values");
$contents = $docToDownload->download();  // The raw report text
// A SimpleXML object if the content type is text/xml, or an array of associative arrays, each
// sub array corresponding to a row of the report
$data = $docToDownload->getData();
// ... do something with report contents
```

### Uploading a feed document

``` php
use SellingPartnerApi;

const CONTENT_TYPE = "text/xml";  // This will be different depending on your feed type
$feedsApi = new Api\FeedsApi();
$createFeedDocSpec = new Model\Feeds\CreateFeedDocumentSpecification(["content_type" => CONTENT_TYPE]);
$feedDocumentInfo = $feedsApi->createFeedDocument($createFeedDocSpec);

$docToUpload = new Document($feedDocumentInfo->getPayload(), CONTENT_TYPE)
$docToUpload->upload();
```
