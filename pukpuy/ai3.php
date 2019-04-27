<?php
function response($query_text)
{
  $json = '{
              "speech": '.$query_text.'",
              "displayText": "this text is displayed visually"
            }';

  $j_return = json_decode($json,true);
  header("Content-Type: application/json");
	echo json_encode($j_return);
}
header("Content-Type: application/json");	
$method = $_SERVER["REQUEST_METHOD"];
if($method == "POST")
{
  $requestBody = file_get_contents('php://input');
  $data = json_decode($requestBody,true);
	response($data);
}else{
	echo "Method Not allow";
}



?>