<?php $db=new Database;
$req = $db->prepare("select * from projetsPresse");

  foreach ($req as $row){
    echo "<div class='blockPort'><h4>".$row["titre"]."</h4>" ;
    echo "<p>".$row["description"]."</p>" ;
    echo "<a class='lienPort' href=".$row["lien"].">► Voir l'article</a>" ;
    echo "<img class='img-responsive' id='imgPort' src='view/images/".$row["img"]."'></div>" ;
 } ?>
