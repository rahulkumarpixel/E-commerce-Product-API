<?php
$consumer_key="ck_8a8eb3a4c98787b1603014873bba8b4bac346a64";
$customer_key="cs_a991dcbfa14873c63b4398ba414087deff58199e";
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
  'http://localhost/Ecommerce-api/eshop/',
  $consumer_key,
  $customer_key,
  [
    'version' => 'wc/v3',
  ]
);
$data = [
  'product_id' => 22,
  'review' => 'Nice album!',
  'reviewer' => 'John Doe',
  'reviewer_email' => 'john.doe@example.com',
  'rating' => 5
];

print_r($woocommerce->post('products/reviews', $data));

?>