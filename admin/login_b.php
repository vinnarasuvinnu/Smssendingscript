<?php
include("../db.php");
session_start();
$u=$_POST['uname'];
$p=$_POST['pass'];
$q1="select * from register where uname='$u' and password='$p'";
$res=mysqli_query($db,$q1);
$row=mysqli_num_rows($res);


if($row==1){
	$_SESSION['uname']=$u;

  echo "1";
}
else{
  echo "your login is not successful";
}


?>