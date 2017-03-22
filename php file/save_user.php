<?php

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];

	include 'conn.php';
    session_start();
	$sql = "insert into users(username,password,phone,email) values('$username','$password','$phone','$email')";
	$result = @mysql_query($sql);
	if ($result){
            $_SESSION['isLogin']='true';
             echo json_encode(array ('msg'=>'Register successfully.'));
    	} else {
    		echo json_encode(array('msg'=>'Register unsuccessfully.'));
    	}
?>
