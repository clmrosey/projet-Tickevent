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
					echo"<form method='POST' action='Executappart.php'> Entre (premier chiffre non compris) : <select name='place1' id='place1'>";
					$i = 1;
					while ($i <= $Nbr_Places)
					{
						echo "<option value =". $i . ">" . $i . "</option>";
						$i++;
					}
					$i = 1;
					echo "</select></br>et (compris): <select name='place2' id='place2'>";
					while ($i <= $Nbr_Places)
					{
						echo "<option value =". $i . ">" . $i . "</option>";
						$i++;
					}
					echo "</select></br>Type de place : <select name='typeplace' id='typeplace'>";
					$req="SELECT Nom FROM TYPES";
					$resultat=mysqli_query($connexion, $req);
					if ($resultat)
					{
						while ($res = mysqli_fetch_assoc($resultat))
							echo  '<option value ="' . $res["Nom"] . '">' . $res["Nom"] . '</option></br></br>';
					}
					else
					{
						echo "<b>Erreur dans l'éxécution de la requête. </b></br>";
						echo "<b> Message de MySQL :</b>" . mysqli_error($connexion);
					}
					echo "</select>";
					echo "<input type='hidden' name = 'salle' value='$Salle'/></br><input type='submit' name='Valider'/></form>";
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