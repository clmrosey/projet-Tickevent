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
			$Salle = $_POST["Salle"];
			$req2="SELECT Nbr_Places FROM Salles WHERE Nom_Salle LIKE '$Salle'";
			$resultat2 = mysqli_query ($connexion, $req2);
			if ($resultat2)
				{
					$res2 = mysqli_fetch_assoc($resultat2);
					echo "Nombre de places : " . $res2['Nbr_Places'];
					$Nbr_Places = $res2['Nbr_Places'];
					$i = 1;
					while ($i != ($Nbr_Places + 1))
					{
						$req3="INSERT INTO Places VALUES('$i','$Salle')";
						mysqli_query($connexion, $req3);
						$i++;
					}
				}
			else
				{
					echo "<b>Erreur dans l'éxécution de la requête. </b></br>";
					echo "<b> Message de MySQL :</b>" . mysqli_error($connexion);
				}
		}
	?>
	</body>
</html>