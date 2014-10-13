<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Accueil </title>
	</head>
	<body>
	<?php
		include ("Connexion.php");
		$connexion = mysqli_connect (SERVEUR, NOM, PASSE, BASE);
		if (!$connexion)
		{
			echo "Connexion à". SERVEUR . "impossible\n";
		}
		else
		{
			mysqli_set_charset($connexion,"utf8");
			$req="select Nom_salle from Salles";
			$resultat = mysqli_query ($connexion, $req);
			echo '<form method="POST" action="Appartplace.php"><select name ="Salle" id="Salle">';
			if ($resultat)
				{
					while ($res = mysqli_fetch_assoc($resultat))
						echo  '<option value ="' . $res["Nom_salle"] . '">' . $res["Nom_salle"] . '</option></br></br>';
				}
			else
				{
					echo "<b>Erreur dans l'éxécution de la requête. </b></br>";
					echo "<b> Message de MySQL :</b>" . mysqli_error($connexion);
				}
				echo '</select>';
			echo '</br><input type="submit" value="Valider"/></form>';
		}
	?>
	</body>
</html>