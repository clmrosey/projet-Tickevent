<?php

include ("Connexion.php");



   $connexion = mysqli_connect (SERVEUR, NOM, PASSE, BASE);
        if (!$connexion)
        {
                echo "Connexion à". SERVEUR . "impossible\n";
        }
        else
        {
            $reserve_place = $_POST['reserve_place'];
            
            
             //echo $reserve;
            
            
            $req = "SELECT Nbr_places FROM salles WHERE nom_salle = 'Le Dome'";
            mysqli_set_charset($connexion,"utf8");
            $resultat = mysqli_query ($connexion, $req);
            $res = mysqli_fetch_assoc($resultat);
               
            
        }


?>

