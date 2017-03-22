<?php
session_start();
if( $_SESSION['isLogin']=='true' )
{
 echo json_encode(array ('con'=>'true'));
}
else
{
 echo json_encode(array ('con'=>'false'));
}
?>