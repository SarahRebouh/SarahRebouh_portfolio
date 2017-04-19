<section>
    <div class="portJournalisme">

        <?php $db=new Database;
        $req = $db->prepare("select * from projetsPresse");

          foreach ($req as $row){
            echo "<div class='blockPort'><h4>".$row["titre"]."</h4>" ;
            echo "<p>".$row["description"]."</p>" ;
            echo "<a class='lienPort' href=".$row["lien"].">► Voir le projet</a>" ;
            echo "<img id='imgPort' src='view/images/".$row["img"]."'><br></div>" ;
         } ?>

    </div>
</section>
