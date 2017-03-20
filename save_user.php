<?php

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];

	include 'conn.php';

	$sql = "insert into users(username,password,phone,email) values('$username','$password','$phone','$email')";
	$result = @mysql_query($sql);
	if ($result){
    		echo json_encode(array ('msg'=>'Register successfully.'));
    	} else {
    		echo json_encode(array('msg'=>'Register unsuccessfully.'));
    	}
?>
