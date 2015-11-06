<!DOCTYPE html>
<html>
	<head>
		<title>Ceci est une page de test avec des balises PHP</title>
<meta charset="utf-8"/>

	</head>
	<body>
	bonjour
		<p>
		Cette page contient du code HTML avec des balises PHP.<br/>
		<font size="2" face="Bodoni"> Le texte en HTML</font>
		<?php
		// le code PHP
		$heure = date ("H\hi");
		print("<font size=\"2\" face=\"Bodoni\"> et celui en PHP.</font>");
		?>
		<!-- retour en code HTML -->
		<br><font size="2" face="Bodoni"> il est <?php echo $heure;?>.</font>

		</p>
	</body>
</html>

