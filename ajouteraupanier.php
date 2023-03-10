<?php
require ('__header.php');
if(isset($_GET['h'])){

    $p= $DB->query('SELECT id_product FROM product WHERE id_product = :h' , array('h'=>$_GET['h']));
    if(empty($p)){
             die("ce produit n'existe pas");
    } 
    $panier->add($p[0]->id_product);
    die('le produit a bien été ajouter');
}else{
    die("vous n'avez pas sélectionné de produit a ajouter au panier");
}

?>