<?php 

	$db = new SQLite3('switch.db');

	$res = $db->query('SELECT * FROM info_switch ORDER BY nom_lycee');

	while ($row = $res->fetchArray(SQLITE3_ASSOC)) {
		echo '<tr><td>' . $row['id_switch'] . '</td><td>' . $row['ip_switch'] . '</td><td>' . $row['loc_switch'] . '</td><td>' . $row['nom_lycee'] . '</td></tr>';
	}

?>