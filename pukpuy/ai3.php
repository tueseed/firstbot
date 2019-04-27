<?php
function response()
{
  $json = '{
              "speech": "this text is spoken out loud if the platform supports voice interactions",
              "displayText": "this text is displayed visually"
            }';
  $j_return = json_decode($json,true);
  header("Content-Type: application/json");
  //echo $j_return;
	echo json_encode($j_return);
}
header("Content-Type: application/json");	
$method = $_SERVER["REQUEST_METHOD"];
if($method == "POST")
{
	$requestBody = file_get_contents('php://input');
	response();
}else{
	echo "Method Not allow";
}



?>