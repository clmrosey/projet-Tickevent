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
                        <div class="bac">
                            <div class="Information_panier1">
                            <h3>Nom artiste/Groupe   </h3>
                                <h3>Date concert</h3>
                                <h4><i>Genre Concert (italique)</i></h4>
                                <p>Description concert</p>
                            </div>
                            <div class="imgbac">
                                <img src="img/accueil/mininorman.png">
                            </div>  
                        </div>   
                        <p></p>
                        </div>
                    <div class="bac2">
                            <div class="Information_panier2">
                                <h3>Nom artiste/Groupe   </h3>
                                <h3>Date concert</h3>
                                <h4><i>Genre Concert (italique)</i></h4>
                                <p>Description concert</p>
                            </div>
                        <div class="imgbac2">
                            <img src="img/accueil/mininorman.png"/>
                        </div>
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
                    <form target="paypal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" >
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="business" value="ticketevent@contact.com">
                        <input type="hidden" name="lc" value="FR">
                        <input type="hidden" name="item_name" value="concert">
                        <input type="hidden" name="item_number" value="00023">
                        <input type="hidden" name="button_subtype" value="products">
                        <input type="hidden" name="no_note" value="0">
                        <input type="hidden" name="currency_code" value="EUR">
                        <input type="hidden" name="tax_rate" value="0.000">
                        <input type="hidden" name="shipping" value="0.00">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_SM.gif:NonHostedGuest">
                        <table>
                            <tr><td><input type="hidden" name="on0" value="Places">Places</td></tr><tr><td><select name="os0">
                                        <option value="1">1 €40,00 EUR</option>
                                        <option value="2">2 €80,00 EUR</option>
                                        <option value="3">3 €120,00 EUR</option>
                                        <option value="4">4 €160,00 EUR</option>
                                        <option value="5">5 €200,00 EUR</option>
                                        <option value="6">6 €240,00 EUR</option>
                                        <option value="7">7 €280,00 EUR</option>
                                        <option value="8">8 €320,00 EUR</option>
                                        <option value="9">9 €360,00 EUR</option>
                                        <option value="10">10 €400,00 EUR</option>
                                    </select> </td></tr>
                            <tr><td><input type="hidden" name="on1" value="Email :">Email :</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
                        </table>
                        <input type="hidden" name="currency_code" value="EUR">
                        <input type="hidden" name="option_select0" value="1">
                        <input type="hidden" name="option_amount0" value="40.00">
                        <input type="hidden" name="option_select1" value="2">
                        <input type="hidden" name="option_amount1" value="80.00">
                        <input type="hidden" name="option_select2" value="3">
                        <input type="hidden" name="option_amount2" value="120.00">
                        <input type="hidden" name="option_select3" value="4">
                        <input type="hidden" name="option_amount3" value="160.00">
                        <input type="hidden" name="option_select4" value="5">
                        <input type="hidden" name="option_amount4" value="200.00">
                        <input type="hidden" name="option_select5" value="6">
                        <input type="hidden" name="option_amount5" value="240.00">
                        <input type="hidden" name="option_select6" value="7">
                        <input type="hidden" name="option_amount6" value="280.00">
                        <input type="hidden" name="option_select7" value="8">
                        <input type="hidden" name="option_amount7" value="320.00">
                        <input type="hidden" name="option_select8" value="9">
                        <input type="hidden" name="option_amount8" value="360.00">
                        <input type="hidden" name="option_select9" value="10">
                        <input type="hidden" name="option_amount9" value="400.00">
                        <input type="hidden" name="option_index" value="0">
                        <input type="image" src="https://www.sandbox.paypal.com/fr_FR/FR/i/btn/btn_cart_SM.gif" border="0" name="submit" alt="PayPal - la solution de paiement en ligne la plus simple et la plus sécurisée !">
                        <img alt="" border="0" src="https://www.sandbox.paypal.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                    </form></br>
                    <div class="sec">
                        <p>Pour des raisons de sécurité,</br> nous acceptons que des</br> paiements de maximum</br> 10 places, au-delà il faut</br> nous contacter.</p>
                    </div>
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