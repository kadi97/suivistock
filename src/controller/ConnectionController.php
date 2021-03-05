<?php
use entities\TraitementUser;
require_once '../entities/User.php';
require_once '../model/TraitementUser.php';

if( isset($_POST['connecter']))
{
      $email    = $_POST['email'];
      $password = $_POST['password'];

      $connexion = new TraitementUser();
      $user = $connexion->getConnection($email,$password);
  
   if($user != null)
   {
       session_start();
       $_SESSION['id']     =  $user['id'];
       $_SESSION['nom']    =  $user['nom'];
       $_SESSION['prenom'] =  $user['prenom'];
       $_SESSION['email']  =  $user['email'];
       $_SESSION['etat']   =  $user['etat'];
       header("Location: http://localhost/suivistock/accueil.php");
   }
   else
   {
       header("Location: http://localhost/suivistock/?error");
   }
}