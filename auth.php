<?php



class auth
{ 

 function __construct()
    {
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wordpress',
    'ck_f5fd80c5208fe8d7ea3fc115cd1d7fa244654317',
    'cs_7ebb11b98a70190edcc4929e0f40b3e12293f257',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);
}
}
?>