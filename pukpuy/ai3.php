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
    $text_message = array('speech'=>'hihi','type'=>0);
	$response = array(
		   'fulfillmentText' => '123456789',	
			'fulfillmentMessages' => array($text_message)		   
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