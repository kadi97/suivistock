<?php
session_start();
use entities\Produit;
use entities\TraitementProduit;

require_once '../entities/Produit.php';
require_once '../model/TraitementProduit.php';

if( isset($_POST['enregistrer']))
{
   $nom   = $_POST['nom'];
   $ref   = $_POST['ref'];
   $stock = $_POST['quantite'];
   $datep = $_POST['dateP'];
   $prix  = $_POST['prix'];

   $produit = new Produit();
   $produit->setId(0);
   $produit->setNom($nom);
   $produit->setRef($ref);
   $produit->setQtStock($stock);
   $produit->setDateP($datep);
   $produit->setPrix($prix);
   $produit->setUser($_SESSION['id']);

   $traitement = new TraitementProduit();
   $result = $traitement->addProduit($produit);
    

   if($result == 1)
   {
       header("Location: http://localhost/suivistock/accueil");
   }
   else
   {
       header("Location: http://localhost/suivistock/formulaire_produit?error");
   }
}


 if( isset($_GET['id']))
 {
    $traitement = new TraitementProduit();
    $result = $traitement->deleteProduits($_GET['id']);

    if($result == 1)
    {
       header("Location: http://localhost/suivistock/accueil");
    }
    else
    {
      header("Location: http://localhost/suivistock/formulaire_produit?error");
    }

 }