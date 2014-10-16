<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    <title>A Venir</title>
    <link rel="icon" type="favicon" href="img/Favicon.png" />
    <link  rel="stylesheet" href="Tickevent.css" />
    <?php
    include('menu.php');
    ?>

</head>
    <body>
        <header>
            <nav></br>
                <div class="noman_search">
                    <div class="noman">
                    <li><a href="index.php"> Accueil > <a href="concert_venir.php"> A Venir</a> </a></li>
                    </div>
                <div class="search_form">
                    <form action="#">
                        <input type="text" id="search" size="25">
                        <button id="search_btn" value=""/><img src="img/accueil/loupe_low.png" width="12" height="10"/></button>
                    </form>
                </div>
                </div>
        <div class="Bloc_filtre">
            <div class="filtre">
                <select name="filtre_style">
                    <?php
                    /*while ($tab=mysqli_fetch_array())
                    {
                        echo "<option>$tab[0]</option>";
                    }
                    */?>
                </select>
                </br>
                <select name="filtre_local">
                    <?php/*
                        while ($tab=mysqli_fetch_array())
                        {
                            echo "<option>$tab[1]</option>";
                        }
                        */?>
                </select>
                </br>
                <select name="filtre_prix">
                    <?php/*
                        while ($tab=mysqli_fetch_array())
                        {
                            echo "<option>$tab[2]</option>";
                        }
                        */?>
                </select>
            </div>
        </div>
        <div class="Contenu">
            <div class="entete_concert">
                <div class="Affiche_entete">
                    Affiche
                </div>
                <div class="Information_entete">
                    Information
                </div>
                <div class="Prix_entete">
                    Prix
                </div>
            </div>
            <div class="Enregistrement">
                <div class="Img_concert">
                    <img alt src="img/accueil/mininorman.png"/>
                </div>
                <div class="Information_concert">
                    <div class="Contenu_information">
                        <h3>Nom artiste/Groupe   </h3>
                        <h3>Date concert</h3>
                        <h4><i>Genre Concert (italique)</i></h4>
                        <p>Description concert</p>
                    </div>
                </div>
                <div class="prix_concert">
                    <div class="prix_concert_contenu">
                        <p>Prix TTC</p>
                        <form>
                            <input type="submit" name="submit" value="Reserver">
                        </form>
                    </div>
                </div>
            </div>
        </div></br>
    </nav>
</header>
</body>
<footer>
    <?php
    include('footer.php');
    ?>
</footer>
</html>