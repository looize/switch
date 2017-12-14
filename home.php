<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	    <link rel="stylesheet" type="text/css" href="simple-grid.css">
	    <link rel="stylesheet" type="text/css" href="home.css">
	</head>

	<body>
		<header>
			<h1>Gestion des Switch</h1>
		</header>

		<div class="container"> <!--Une colone pour le tableau-->
			<div class="row">
				<div class="col-4">
					<div id="tableau">
						<table>
							<tr>
								<th>Num&eacute;ro du switch</th>
								<th>Adresse IP</th>
								<th>Localisation</th>
								<th>Etablissement</th>
							</tr>

							<?php include 'traitement.php'; ?>

						</table>
					</div>
				</div>
				<div class="col-3">
				</div>
				<div class="col-5">
					<form method="post" action="traitement2.php">
						<fieldset>
							<legend class="legend">Ajouter un switch</legend>
							<label>Veuillez indiquer l'adresse IP:</label>
							<input name="ip" type="text"></br>
							<label>Ou se trouve le switch?</label></br>
							<input name="loc" type="text">
							<label>Dans quel lyc&eacute;e se trouve t-il ?</label>
							<input name="nom" type="text"></br>
							<input class="button2" name="add" type="submit" value="Ajouter">
						</fieldset>
					</form>

					<form method="post" action="traitement3.php">
						<fieldset>
							<legend class="legend">Supprimer un switch</legend>
							<label>Veuillez indiquer l'adresse IP:</label>
							<input name="ip" type="text"></br>
							<input class="button2" name="delete" type="submit" value="Supprimer">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>