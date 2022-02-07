
<?php 
require  '../vendor/autoload.php';

use Automattic\WooCommerce\Client;

if(isset($_POST['delete']) )
{

  include '../Model/client.php';
  $customer = new customer($_POST['id'],null,null,null);
  $data =  $customer->delete();
  
  header("Location: http://localhost/woocommerce/customer.php");
}
else if(isset($_POST['edit']) )
{

  include '../Model/client.php';
  $customer = new customer($_POST['id'],$_POST['first_name'],$_POST['last_name'],$_POST['email']);
  $data =  $customer->update();
  
  header("Location: http://localhost/woocommerce/customer.php");
}
else if(isset($_POST['canal']) )
{

  header("Location: http://localhost/woocommerce/customer.php");
}

else if(isset($_POST['create']))
{

  include '../Model/client.php';
  $customer = new customer(null,$_POST['first_name'],$_POST['last_name'],$_POST['email']);
  $data =  $customer->create();
  
  header("Location: http://localhost/woocommerce/customer.php");
}


?>