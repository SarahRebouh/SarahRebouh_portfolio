<?php
session_start();

if (isset($_POST['button']))
{
  $err_pseudo = true;
  $err_select_salon = true;
  $err_noteDuSalon = true;
  $err_avis = true;
  $err_fichier = true;

  if ($_POST['nom'] == ""){

      $_SESSION['err_nom'] = "Merci d'indiquer votre nom.";
      $err_nom = false;
  }
  if ($_POST['prenom'] == ""){

      $_SESSION['err_prenom'] = "Merci d'indiquer votre nom.";
      $err_prenom = false;
  }
  if($_POST["mail"] == "")
  {
      $_SESSION["err_mail"] = "Merci d'indiquer votre adresse mail." ;
      $err_mail = false;
  }
  if($_POST["message"] == "")
  {
      $_SESSION["err_message"] = "Merci de taper votre message." ;
      $err_message = false;
  }
  if($err_nom == true && $err_prenom == true && $err_mail == true && $err_message == true){
      
  }
 }
