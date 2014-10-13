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
			$place1 = $_POST["place1"];
			$place2 = $_POST["place2"];
			$type = $_POST["typeplace"];
			$salle =$_POST["salle"];
			while ($place1 <= $place2)
				{
					$req = "INSERT INTO appartenir VALUES('$place1', '$salle', '$type')";
					mysqli_query($connexion, $req);
					$place1++;
				}
		}
	?>
	<a href="RempliAppartenir.php">Entrer d'autres types</a>
	</body>
</head>