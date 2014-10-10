<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html"/>
    <link rel="icon" type="favicon" href="img/Favicon.png" />
    <title>Contact</title>
    <?php
    include('menu.php');
    ?>
</head>

<body>
    <nav></br>
        <div class="noman_search">
            <div class="noman">
                <li><a href="index.php"> Accueil > <a href="contact.php"> Contact</a> </a></li>
            </div>
            <div class="search_form">
                <form action="#">
                    <input type="text" id="search" size="25">
                    <button id="search_btn" value=""/><img src="img/accueil/loupe_low.png" width="12" height="10"/></button>
                </form>
            </div>
        </div>
    </nav>
    <div>
        <div class="formulaire_contact">
        Pour envoyer une demande à notre service client, il suffit de renseigner le formulaire ci-dessous.<br/>
        Notre service fera tout son possible pour traiter votre demande dans les plus brefs délais.<br/>
        <p></p>
            <form id="myform" class="cssform" action="">
                <p><label for="user">Nom:</label>
                    <input type="text" id="user" value="" size="30"/></p>
                <p><label for="emailaddress">Email:</label>
                    <input type="text" id="emailaddress" value="" size="30"/></p>
                <p><label for="emailaddress">Sujet:</label>
                    <input type="text" id="emailaddress" value="" size="30"/></p>
                <p><label for="comments">Message:</label>
                    <textarea id="comments" rows="5" cols="25" ></textarea></p>
                <p></p>
            </form>
            <div id="envoyer">
                <label>	<a href="mailto:samouille@yopmail.com">Envoyer</a></label>
            </div>
        </div>
        <div class="map">
            Nos Coordonnées :</br>
            TickEvent</br>
            21 Rue Marc Donadille, 13013 Marseille</br>
            </p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1450.7420140119325!2d5.430017799999992!3d43.345985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bfd1fac74637%3A0xebf78255c810c310!2s21+Rue+Marc+Donadille%2C+13013+Marseille%2C+France!5e0!3m2!1sen!2sus!4v1411481430722" width="500" height="450" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
</body>
<footer>
     <?php
     include('footer.php');
    ?>
</footer>
</html>