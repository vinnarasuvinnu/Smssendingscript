<?php

include('../do.php');
$q1="select * from booklist";
$res=mysqli_query($db,$q1);
$output=array();
if($res){

while($row=mysqli_fetch_array($res)){

	$output []=array('bname'=>$row['book'],'aname'=>$row['auth'],'path'=>$row['path'],'des'=>$row['des'],'bpath'=>$row['bpath']);
}

}
echo json_encode(array('result'=>$output));

?>



