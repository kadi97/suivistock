<?php
namespace entities;

class Produit
{
    private $id;
    private $ref;
    private $nom;
    private $qtStock;
    private $dateP;
    private $idUser;
    private $prix;
   
    public function  __construct()
    {

    }

    public function setId($id)
    {
       $this->id =$id;
    }

    public function setUser($idUser)
    {
       $this->idUser =$idUser;
    }


     public function setNom($nom)
     {
        $this->nom  =$nom;
     }

     public function setRef($ref)
     {
        $this->ref = $ref;
     }

     public function setQtStock($qtStock)
     {
        $this->qtStock = $qtStock;
     }


     public function setDateP($dateP)
     {
        $this->dateP = $dateP;
     }

     public function setPrix($prix)
     {
        $this->prix  =$prix;
     }


    /**
     * getters
     */

    public function getId()
    {
        return $this->id;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getDateP()
    {
        return $this->dateP;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function getQtStock()
    {
       return $this->qtStock;
    }

    public function getUser()
    {
       return $this->idUser;
    }

    
    public function getPrix()
    {
       return $this->prix;
    }

     
}