<?php
session_start();
require_once'mailPerso.php';
if(isset($_POST['name'])){
    $err_name = "" ;
    $err_mail = "" ;
    $err_tel = "" ;
    $err_message = "";
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $message = $_POST['message'];


    if($name == "" ){
        $_SESSION['nameErr'] = "Merci d'indiquer votre nom et votre prénom.";
        $err_name = "Merci d'indiquer votre nom et votre prénom." ;
    }else{
        if (!preg_match("/^[a-zA-Z ]*$/",$name)){
            $_SESSION['nameErr'] = "Seuls les lettres et espaces sont autorisés.";
            $err_name = "Seuls les lettres et espaces sont autorisés." ;
        }
    }
    if($mail == ""){
        $err_mail = "J'ai besoin d'un email pour vous répondre." ;
        $_SESSION['mailErr'] = "J'ai besoin d'un email pour vous répondre.";
    }else{
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $err_mail = "Cet email n'est pas valide." ;
            $_SESSION['mailErr'] = "Cet email n'est pas valide.";
        }
    }
    if($tel == ""){
        $err_tel = "Merci d'indiquer votre numéro de téléphone." ;
        $_SESSION['phoneErr'] = "Merci d'indiquer votre numéro de téléphone.";
    }else{
        if(!is_numeric($tel)){
            $err_tel = "Ce numéro de téléphone n'est pas valide." ;
            $_SESSION['phoneErr'] = "Ce numéro de téléphone n'est pas valide.";
        }
    }
    if($message == "" ){
        $_SESSION['messageErr'] = "Merci d'inscrire votre message.";
        $err_message = "Merci d'inscrire votre message." ;
    }
    if($err_name !== "" || $err_mail !== "" || $err_tel !== "" || $err_message !== ""){

        $array = array(                                 // mise en place du JSON pour récupérer les messages d'erreur en Ajax
            "name" => $err_name,
            "mail" => $err_mail,
            "tel" => $err_tel,
            "message" => $err_message
        );
        echo json_encode($array);

    }else{
        echo 'great';
        $to = $mailPerso;
        $from = $_POST['mail'];
        $tel = $_POST['tel'];
        $name = $_POST['name'];
        $message = $_POST['message'];
        $textmail = "Salut, ".$name." t'écris un mail avec ce message : ".$message.".<br /> Voici son numéro de téléphone :".$tel." et son mail ".$from."";
        $subject = "Salut Sarah !! Quelqu'un te contacte via ton appli !";
        $headers = "Coucou c'est moi";
        $headers = "Content-Type: text/html; charset=\"utf-8\"";
        mail($to,$subject,$textmail,$headers);

    }
}
