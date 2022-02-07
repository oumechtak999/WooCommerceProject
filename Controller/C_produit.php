
<?php 
require  '../vendor/autoload.php';

use Automattic\WooCommerce\Client;

if(isset($_POST['delete']))
{
   

include '../Model/produit.php';
     $produit = new produit($_POST['id_produit'],null,null,null);
               $data =  $produit->delete();
  
    header("Location: http://localhost/woocommerce");
}
else if(isset($_POST['edit']) )
{


include '../Model/produit.php';
     $produit = new produit($_POST['id'],$_POST['name'],$_POST['slug'],$_POST['description']);
               $data =  $produit->update();
  
    header("Location: http://localhost/woocommerce");
}
else if(isset($_POST['canal']) )
{
   

    header("Location: http://localhost/woocommerce");
}

else if(isset($_POST['create']))
{
   


include '../Model/produit.php';
     $produit = new produit(null,$_POST['name'],$_POST['slug'],$_POST['description']);
               $data =  $produit->create();
  
    header("Location: http://localhost/woocommerce");
}


?>