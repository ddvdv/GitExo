<?php
include_once('modele/connexion_db.php');
?>

<!DOCTYPE Html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css" />
		<title>Eric Collection</title>
	</head>


<body>
	<div class="conteneur1">

		<div class='menu'>
			<?php include('inc_menu.php'); ?>
		</div>


		<div class='conteneur2'>
			<?php include('inc_recherche_form.php'); ?>
			<?php include('inc_recherche_result.php'); ?>
		</div>	
		
	</div>

</body>

</html>
