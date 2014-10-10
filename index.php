<!DOCTYPE HTML>
<html>
    <head>
	    <meta http-equiv="content-type" content="text/html charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=false" />
        <script src="js/jquery.js" type="text/javascript"></script>
        <link rel="icon" type="favicon" href="img/Favicon.png" />
	    <title>TickEvent</title>
    </head>
    <div class="site">
      <header>
                <?php
                /*include('connexion.php');
                           $connexion = mysqli_connect(SERVER,NOM,PASSE,BASE);*/
                include('menu.php');
                /*if ($connexion = true)
                {
                    echo "connexion établie</br>";
                }
                else
                {
                echo "connexion échoué</br>";
                exit;
                }*/
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
				</div></br>
        <div class="slideshow">
            <ul>
                <li><img src="img/accueil/cbe1ab3d-9e4d-4e65-8597-c5c81c422597-980x380.png" alt="" width="940" height="380" /></li>
                <li><img src="img/accueil/s.png" alt="" width="940" height="380" /></li>
                <li><img src="img/accueil/n.png" alt="" width="940" height="380" /></li>
                <li><img src="img/accueil/k.png" alt="" width="940" height="380" /></li>
            </ul>
        </div>
        <?php
        include ("slider.js");
        ?></br>
        <div class="bare1">
            <img src="img/accueil/ligne.gif" alt="" width="657" height="1"/>
        </div>
        <div class="cadre1">
            <img src="img/accueil/Content-dernierconcerts.gif" alt="" width="420" height="200"/>
            </div>
        <div class="cadre2">
            <img src="img/accueil/Content-dernierconcerts.gif" alt="" width="420" height="200"/>
        </div></br>
        <div class="bare2">
            <img src="img/accueil/ligne.gif" alt="" width="657" height="1"/>
        </div></br>
        <div class="mcadre1">
            <img src="img/accueil/Content-topdesventes.gif" alt="" width="200" height="190" />
        </div>
        <div class="mcadre2">
            <img src="img/accueil/Content-topdesventes.gif" alt="" width="200" height="190" />
        </div>
        <div class="mcadre3">
            <img src="img/accueil/Content-topdesventes.gif" alt="" width="200" height="190" />
        </div>
        <div class="mcadre4">
            <img src="img/accueil/Content-topdesventes.gif" alt="" width="200" height="190" />
        </div>
         <footer>
        <?php
        include('footer.php');
        ?>
        </footer>
		</div>
</html>
