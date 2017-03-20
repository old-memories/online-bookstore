<html>
	<head><title>test</title></head>
	<body>
	   <?php
		$dbhost = 'localhost'; //the ip of RDBMS server
		$dbuser = 'root'; //username
		$dbpassword= 'reins2011'; //password
		$connect = mysql_connect($dbhost,$dbuser,$dbpassword);
		if ($connect) {
			echo 'Succeed in getting connection!<br>';
		} else {
			echo 'Failed in getting connection!000<br>';
		}
		$dbname = 'test';
		$db = mysql_select_db($dbname);
		if ($db) {
			echo 'Succeed!';
		} else {
			echo 'Failed!';
		}
	  ?>
	</body>
</html>
