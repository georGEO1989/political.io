<?php
function getReps() {
	include_once '../includes/config.php';

	$STH = $db->query('SELECT * from users');

	$STH->setFetchMode(PDO::FETCH_OBJ);

	while ($row = $STH->fetch()) {
		echo $row->first_name;
	}
}
getReps();