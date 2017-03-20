<?php

	$conn = @mysql_connect('127.0.0.1','root','reins2011');
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	mysql_select_db('test', $conn);

?>
