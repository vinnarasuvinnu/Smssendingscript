<?php



include('../db.php');
	$data=$_POST['info'];
	//echo $data;
	$q1="select * from info";
	$res=mysqli_query($db,$q1);
	$name=array();
	/*$i=0;
	while($row=mysqli_fetch_array($res)){
		$name[$i]=$row['phone'];
		$i++;
	}*/


foreach ($_POST['check'] as $key => $value) {


    $name[$key]=$value;



}
$key++;
$name[$key]="7349476704";


	$senderId = "CutMyQ";
$route = 4;
$campaign = "test Camp";
$sms = array(
    'message' => $data,
    'to' => $name
);
//Prepare you post parameters
$postData = array(
    'sender' => $senderId,
    'campaign' => $campaign,
    'route' => $route,
    'sms' => array($sms)
);
$postDataJson = json_encode($postData);

$url="http://api.msg91.com/api/v2/sendsms";

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => "$url",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $postDataJson,
    CURLOPT_HTTPHEADER => array(
        "authkey: ",
        "content-type: application/json"
    ),
));
$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if ($err) {
    echo "cURL Error #:" . $err;
} else {
    //echo $response;
    echo '<script>alert("message sent successfully");location.href="index.php"</script>';
}


	?>


