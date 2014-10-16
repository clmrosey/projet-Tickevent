<html>
    <head>
	<meta http-equiv="content-type" content="text/html charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=false" />
        <script src="js/jquery.js" type="text/javascript"></script>
        <link rel="icon" type="favicon" href="img/Favicon.png" />
	    <title>TickEvent / RESERVER</title>
    </head>
    <div class="site">
      <header>
                <?php
                include('menu.php');
                ?>
      </header></br>
                <div class="noman_search">
                    <div class="noman">
                    <li><a href="index.php"> Accueil > </a></li>
                    </div>
                    <div class="search_form">
                        <form action="#">
                            <input type="text" id="search" size="25">
                            <button id="search_btn" value=""/><img src="img/accueil/loupe_low.png" width="12" height="10"/></button>
                        </form>
                    </div>
		</div>
<body>
    <img src="img/reserver/Selection_place.png" alt="" width="" height="" />
    </br>     
    </br>
   <?php 
   include ("Connexion.php");
   
   $connexion = mysqli_connect (SERVEUR, NOM, PASSE, BASE);
        if (!$connexion)
        {
                echo "Connexion �". SERVEUR . "impossible\n";
        }
        else
        {
            $req = "SELECT Nbr_places FROM salles WHERE nom_salle = 'Le Dome'";
            mysqli_set_charset($connexion,"utf8");
            $resultat = mysqli_query ($connexion, $req);
            $res = mysqli_fetch_assoc($resultat);
               
            
        }

   $i = 0;
   ?><form name="reserve_place" method='POST' action='reserver_metier.php'> <?php
    while($i != $res['Nbr_places']){
    
    ?><input type='checkbox' name='place[]' value='' <?php $req2 ="SELECT place FROM réserver WHERE Confirmation = '1'"; $resultat2 = mysqli_query($connexion,$req2); $res2 =mysqli_fetch_assoc($resultat2); if($res2['place']-1 == $i){ ?>disabled=''<?php }?>/> <?php echo $i+1 ?><?php
    
    $i++;
    }
    ?>
    </br>
    <input type="submit" name="submit" value="Reserver">
    </form>
    
    
</body>