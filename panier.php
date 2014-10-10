<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    <link rel="icon" type="favicon" href="img/Favicon.png" />
    <link  rel="stylesheet" href="Tickevent.css" />
    <title>Panier</title>

    <?php
    include('menu.php');
    ?>

</head>
    <body>
           <header>
             <nav></br>
                 <div class="noman_search">
                     <div class="noman"/>
                     <li><a href="index.php"> Accueil > <a href="panier.php"> Panier</a> </a></li>
                 </div>
                 <div class="search_form">
                     <form action="#">
                         <input type="text" id="search" size="25">
                         <button id="search_btn" value=""/><img src="img/accueil/loupe_low.png" width="12" height="10"/></button>
                     </form>
                 </div>
                 </div>
                <div class="Contenu">
                    <div class="entete_concert">
                        <div class="Information_entete_panier">
                            Votre reservation
                        </div>
                    </div>
                    <div class="Enregistrement">
                        <div class="Img_concert1">
                            <img alt="" src="img/accueil/s.png"/>
                        </div>
                        <div class="Information_panier1">
                            <h3>Nom artiste/Groupe   </h3>
                                <h3>Date concert</h3>
                                <h4><i>Genre Concert (italique)</i></h4>
                                <p>Description concert</p>
                        </div>
                        <p></p>
                        </div>
                    <div class="Img_concert2">
                        <img alt="" src="img/accueil/s.png"/>
                            <div class="Information_panier2">
                                <h3>Nom artiste/Groupe   </h3>
                                <h3>Date concert</h3>
                                <h4><i>Genre Concert (italique)</i></h4>
                                <p>Description concert</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block_recap">
                    <div class="nbr_place">
                        Nombre de place
                    </div>
                    <p></p>
                        <div class="nbr_chiffre">
                            2<p></p>
                        </div>
                    <div class="num_place">
                        Numéro de place
                    </div>
                    <p></p>
                    <div class="num_chiffre">
                        B21</br>
                        B22<p></p>
                    </div>
                    <div class="prix_place">
                        Prix
                    </div>
                    <p></p>
                    <div class="prix_chiffre">
                        40 €</br>
                        40 €<p></p>
                    </div>
                </div>
                <div class="paypal">
                    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="V49ERAGMMLHPC">
                        <table>
                            <tr><td><input type="hidden" name="on0" value="Votre email ?">Votre email ?</td></tr><tr><td><input type="text" name="os0" maxlength="200"></td></tr>
                        </table>
                        <input type="image" src="https://www.sandbox.paypal.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
                        <img alt="" border="0" src="https://www.sandbox.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                    </form></br>
                </div>
            </nav>
        </header>
    </body>
<footer>
    <?php
    include('footer.php');
    ?>
</footer>
</html>