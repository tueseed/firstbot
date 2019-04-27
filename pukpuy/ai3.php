<?php
function response()
{
  $response = new stdclass();
  $fulfillmentMessages = array();
	$speech = array(
		   'simpleResponse' => array(
			   'textToSpeech' => 'HI THIS ...',
			   'displayText' => 'HI THIS .....'
			)
		);
	$response = array(
		   'fulfillmentText' => array($speech),	
			'fulfillmentMessages' => array($fulfillmentMessages)		   
	   );
	header("Content-Type: application/json");
	echo json_encode($response);
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