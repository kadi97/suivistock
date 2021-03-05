
<?php
require_once 'TraitementProduit.php';

       $pS = new entities\TraitementProduit();
       $listeProduit = $pS->getProduitOnly()->fetchAll();
    if($listeProduit != null)
    {
        $array = array();
        $array2 = array();
        foreach($listeProduit as $produit)
        {
            array_push($array2, $produit['nomP']);
            array_push($array2, $produit['quantite']);
            array_push($array, $array2);
            $array2 = array();
        }
        echo json_encode($array);
    }
   

