
<?php 
require_once("master.php") ; 


$api = 'api token';
$amount = 100;
$mobile = "09";
$factorNumber = "factorNumber";
$description = "description";
$redirect = 'Redirect_url';


$result = send($api, $amount, $redirect, $mobile, $factorNumber, $description);

$result = json_decode($result);

if($result->status) {
	$go = "http://paytwit.com/gateway/$result->transId";
	header("Location: $go");
} else {

	echo $result->errorCode."<br/>";
    echo $result->errorMessage;
}


?>