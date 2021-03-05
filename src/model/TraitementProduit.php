<?php
namespace entities;
use entities\Produit;
use base\DbConnection;

require_once 'DbConnection.php';

class TraitementProduit
{
   
   public function __construct()
   {
    
   }


    public function addProduit(Produit $produit)
    {
       $baseC = new DbConnection();
       $nom = $produit->getNom();
       $ref = $produit->getRef();
       $qstock = $produit->getQtStock();
       $dateP =  $produit->getDateP();
       $idUser = $produit->getUser();
       $prix = $produit->getPrix();
       $connexion = $baseC->getConnection();
       return $connexion->exec("INSERT INTO produit VALUES (NULL,'$nom','$ref',' $dateP',$qstock,'$idUser',$prix)");
    }

    public function getProduits()
    {
       $baseC = new DbConnection();
       $connexion = $baseC->getConnection();
       return $connexion->query("SELECT * FROM user,produit WHERE produit.idUser = user.id");
    }

    public function deleteProduits($id)
    {
       $baseC = new DbConnection();
       $connexion = $baseC->getConnection();
       return $connexion->exec("DELETE FROM produit WHERE id = '$id'");
    }

    public function getProduitOnly()
    {
       $baseC = new DbConnection();
       $connexion = $baseC->getConnection();
       return $connexion->query("SELECT * FROM produit");
    }


}