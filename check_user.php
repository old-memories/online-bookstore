<?php

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	include 'conn.php';

	$sql = "select* from users where username='$username' and password='$password'";
	$result = @mysql_query($sql);
	if ($result){
    	} else {
    		echo json_encode(array('msg'=>'Some errors occured.'));
    	}
	$test=mysql_fetch_array($result);
	if ($test){
		echo json_encode(array ('msg'=>'Login successfully.'));
	} else {
		echo json_encode(array('msg'=>'Login unsuccessfully.'));
	}
?>
