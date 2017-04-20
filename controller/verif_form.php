<?php
session_start();
require_once'mailPerso.php';

if(isset($_POST['button'])){
    $err_name = false ;
    $err_mail = false ;
    $err_tel = false ;
    $err_message = false;

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];

    if($name == "" ){
        $_SESSION['nameErr'] = "Merci d'indiquer votre nom et votre prénom.";
        $err_name = true ;
    }else{
        if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $_SESSION['nameErr'] = "Seuls les lettres et espaces sont autorisés.";
            $err_name = true ;
        }
    }
    if($mail == ""){
        $err_mail = true ;
        $_SESSION['mailErr'] = "J'ai besoin d'un email pour vous répondre.";
    }else{
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $err_mail = true ;
            $_SESSION['mailErr'] = "Cet email n'est pas valide.";
        }
    }
    if($tel == ""){
        $err_tel = true ;
        $_SESSION['phoneErr'] = "Merci d'indiquer votre numéro de téléphone.";
    }else{
        if(!is_numeric($tel)){
            $err_tel = true ;
            $_SESSION['phoneErr'] = "Ce numéro de téléphone n'est pas valide.";
        }
    }
    if($message == "" ){
        $_SESSION['messageErr'] = "Merci d'inscrire votre message.";
        $err_message = true ;
    }
    if($err_name == true || $err_mail == true || $err_tel == true || $err_message == true){
        var_dump('Erreur dans l\'envoi du mail');

    }else{
        echo "ok";
        $to = $mailPerso;
        $from = $_POST['mail'];
        $tel = $_POST['tel'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $subject = "Salut Sarah !! Quelqu'un te contacte via ton appli !";
        $headers = "Coucou c'est moi";
        $headers = "Content-Type: text/html; charset=\"utf-8\"";
        mail($to,$subject,$message,$headers);
    }
    header('Location: ../index.php?param_url=contact');
}
