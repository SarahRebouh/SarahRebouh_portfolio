<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="view/css/style.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body>

         <?php
             require_once "view/templates/header.php";

             if (isset($_GET['param_url'])) {

                require_once "view/pages/".$_GET["param_url"].".php";
    		 }
            else{
                require_once "view/index.php";
             }
             require_once "view/templates/footer.php";
         ?>
    </body>

    <script src="http://cdn.jsdelivr.net/vue/1.0.10/vue.min.js"></script>
    <script type="text/javascript" src="view/js/accueil.js"></script>
</html>
