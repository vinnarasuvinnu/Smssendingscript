<?php
include('db.php');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone_number'];
$co=$_POST['deg'];
$stype=$_POST['stype'];

$q1="INSERT INTO `bulk`.`info` (`name`, `mail`, `phone`, `degree`,`stype`) VALUES ('$name', '$email', '$phone', '$co','$stype')";

$res=mysqli_query($db,$q1);
echo mysqli_error($db);
if($res){
	echo '<script>alert("your data is successfully registered");location.href="index.php";</script>';
}
else{
		echo '<script>alert("your data is not registered");location.href="index.php";</script>';

}


?>