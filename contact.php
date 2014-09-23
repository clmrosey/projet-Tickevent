<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html"/>
    <title>Contact</title>
    <?php
    include('menu.php');
    ?>
</head>

<body>
    <div class="formulaire_contact">
	Pour envoyer une demande à notre service client, il suffit de renseigner le formulaire ci-dessous.<br/>
	Notre service fera tout son possible pour traiter votre demande dans les plus brefs délais.<br/>
<p></p>
        <form id="myform" class="cssform" action="">
            <p><label for="user">Nom :</label>
                <input type="text" id="user" value="" /></p>
            <p><label for="emailaddress">Email :</label>
                <input type="text" id="emailaddress" value="" /></p>
            <p><label for="emailaddress">Sujet :</label>
                <input type="text" id="emailaddress" value="" /></p>
            <p><label for="comments">Message :</label>
                <textarea id="comments" rows="5" cols="25"></textarea></p>
            <p></p>
        </form>
        <ul id="envoyer">
            <label>	<a href="mailto:samouille@yopmail.com">Envoyer</a></label>
        </ul>
    </div>
    <div class="map">
        Nos Coordonnées</br>
        TickEvent</br>
        21 Rue Marc Donadille, 13013 Marseille</br>
    </div>
</body>
</html>