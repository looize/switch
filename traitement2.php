<?php

	$db = new SQLite3('switch.db');

	if (isset($_POST['add'])) {
		if ((!empty($_POST['ip'])) and (!empty($_POST['loc'])) and (!empty($_POST['nom']))) {

			$query = $db->prepare("INSERT INTO info_switch (ip_switch, loc_switch, nom_lycee) VALUES ('".$_POST['ip']."','".$_POST['loc']."','".$_POST['nom']."')");
			$query->execute();
		}
	}		
?>

<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	    <link rel="stylesheet" type="text/css" href="simple-grid.css">
	    <link rel="stylesheet" type="text/css" href="traitement2.css">
	</head>

	<body>
		<header>
			<h1>Gestion des Switch</h1>
		</header>

		<img src="check.png">

		<p>Bravo!</br>Votre insertion a &eacute;t&eacute; un succ&egrave;s !</p>

		<a href="home.php">Revenir à la page d'accueil</a>

	</body>
</html>