<?php
include_once  'vendor/autoload.php';

use Automattic\WooCommerce\Client;
class customer
{
    private $id;
    private $first_name;
    private $last_name;
     private $email;
    
    
    function __construct($id,$first_name,$last_name,$email)
    {
        $this->id= $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name ;
        $this->email = $email;
       

       }
       
    
    function get(){ 


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
return json_encode($woocommerce->get('customers'));
}

    function getById(){ 


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


return json_encode($woocommerce->get('customers/'.$this->id));
}


function delete(){



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
$woocommerce->delete('customers/'.$this->id, ['force' => true]);
}

function update(){



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
$data = [
       
    'first_name' => $this->first_name,
     'last_name' => $this->last_name,
      'email' => $this->email
    
];

print_r($woocommerce->put('customers/'.$this->id, $data));
}


function create(){



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
$data = [
       
    'first_name' => $this->first_name,
     'last_name' => $this->last_name,
      'email' => $this->email
    
];

$woocommerce->post('customers', $data);
}
}

?>