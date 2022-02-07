<?php
include_once  'vendor/autoload.php';

use Automattic\WooCommerce\Client;
class produit
{
    private $id;
    private $name;
    private $slug;
     private $description;
    
    
    function __construct($id,$name,$slug,$description)
    {
        $this->id= $id;
        $this->name = $name;
        $this->slug = $slug ;
        $this->description = $description;
       

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


return json_encode($woocommerce->get('products',array( 'per_page' => 99 )));
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


return json_encode($woocommerce->get('products/'.$this->id));
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
$woocommerce->delete('products/'.$this->id, ['force' => true]);
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
       
    'name' => $this->name,
     'slug' => $this->slug,
      'description' => $this->description
    
];

print_r($woocommerce->put('products/'.$this->id, $data));
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
       
    'name' => $this->name,
     'slug' => $this->slug,
      'description' => $this->description
    
];

$woocommerce->post('products', $data);
}
}

?>