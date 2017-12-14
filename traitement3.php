<?php

	$db = new SQLite3('switch.db');

	if (isset($_POST['delete'])) {
		if (!empty($_POST['ip'])) {
			
			$query = $db->prepare("DELETE FROM info_switch WHERE ip_switch = '".$_POST['ip']."'");
			$query->execute();
		}
	}

?>

<html>
	<head>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	    <link rel="stylesheet" type="text/css" href="simple-grid.css">
	    <link rel="stylesheet" type="text/css" href="traitement3.css">
	</head>

	<body>
		<header>
			<h1>Gestion des Switch</h1>
		</header>

		<img src="check.png">

		<p>Bravo!</br>Votre suppression a &eacute;t&eacute; un succ&egrave;s !</p>

		<a href="home.php">Revenir à la page d'accueil</a>

	</body>
</html>