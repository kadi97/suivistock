<?php
namespace entities;

class User{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $etat;
    private $password;

    public function  constructeurSansArg()
    {

    }

     /**
     * setters
     */

    public function setId($id)
    {
       $this->id = $id;
    }

    public function setNom($nom)
    {
         $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
         $this->prenom = $prenom;
    }

    public function setEmail($email)
    {
         $this->email = $email;
    }

    public function setEtat($etat)
    {
          $this->etat = $etat;
    }

    public function setPassword($password)
    {
          $this->password = $password;
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

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function getEmail()
    {
        return  $this->email;
    }

    public function getPassword()
    {
        return  $this->password;
    }

    public function getEtat()
    {
        return  $this->etat;
    }

}
