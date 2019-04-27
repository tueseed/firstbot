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
    $text_message = array('messages'=>array('speech'=>'hihi','type'=>0));
	$response = array(
		   'fulfillmentText' => '123456789',	
			'fulfillmentMessages' => array(
                                      'messages'=> array('speech'=>'Text response','type'=>0)
      )		   
     );
  $json = '{
              "speech": "this text is spoken out loud if the platform supports voice interactions",
              "displayText": "this text is displayed visually"
            }';
  $j_return = json_decode($json,true);
  header("Content-Type: application/json");
  //echo $j_return;
	echo json_encode($json);
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