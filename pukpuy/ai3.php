<?php
function response($param1)
{
  $json = '{
              "speech": "'.$param1.'",
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
  $request = json_decode($requestBody,true);
  $start_time = $request['parameters']['start_time'];
	response($start_time);
}else{
	echo "Method Not allow";
}



?>