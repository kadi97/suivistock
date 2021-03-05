<?php
namespace entities;
use entities\User;
use base\DbConnection;

require_once 'DbConnection.php';

class TraitementUser
{
   
   public function __construct()
   {
    
   }

    public function addUser(User $user)
    {
       $baseC = new DbConnection();
       $nom = $user->getNom();
       $prenom = $user->getPrenom();
       $email = $user->getEmail();
       $etat = $user->getEtat();
       $connexion = $baseC->getConnection();
       return $connexion->exec("INSERT INTO user VALUES (NULL,'$nom','$prenom','$email',$etat)");
    }


    public function getConnection(String $email, String $mdp)
    {
      $baseC = new DbConnection();
      $connexion = $baseC->getConnection();
      return $connexion->query("SELECT * FROM user WHERE email = '$email' AND password = '$mdp'")->fetch();
   }


}