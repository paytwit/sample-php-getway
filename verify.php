
<?php 
require_once("master.php") ; 


$api = 'api token';
$token=$_GET["token"];
$status=$_GET["status"];

$result=verify($api,$token);
if ($result->status==1) {
	echo "paysuccess";
}
if ($verify->status==1) {
	echo $result->errorCode."<br/>";
    echo $result->errorMessage;
}
/*

  $result object   Success
    // 
		status
		amount
		transId
		factorNumber
		mobile
		description
		message
*/


?>