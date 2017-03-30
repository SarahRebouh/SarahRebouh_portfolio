<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="view/css/style.css">
        <script src="//cdnjs.cloudflare.com/ajax/libs/velocity/1.4.3/velocity.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/velocity/1.4.3/velocity.ui.min.js"></script>
    </head>
    <body>

         <?php
             require_once "view/templates/header.php";

             if (isset($_GET['param_url'])) {
             require_once "view/index.php";

        		if($_GET["param_url"] == "contact"){
        			 require_once "view/pages/contact.php";
    		    }
                else if($_GET["param_url"] == "competences_menu"){
        			 require_once "view/pages/competences_menu.php";
    		    }
                else if($_GET["param_url"] == "competences_journalisme"){
        			 require_once "view/pages/competences_journalisme.php";
    		    }
                else if($_GET["param_url"] == "competences_dev"){
        			 require_once "view/pages/competences_dev.php";
    		    }
                else if($_GET["param_url"] == "portfolio_menu"){
        			 require_once "view/pages/portfolio_menu.php";
    		    }
                else if($_GET["param_url"] == "portfolio_journalisme"){
        			 require_once "view/pages/portfolio_journalisme.php";
    		    }
                else if($_GET["param_url"] == "portfolio_dev"){
        			 require_once "view/pages/portfolio_dev.php";
    		    }
                else if($_GET["param_url"] == "diplomes"){
        			 require_once "view/pages/diplomes.php";
    		    }
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
