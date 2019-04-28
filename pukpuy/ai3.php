<?php
function creat_meeting($meeting_date,$meeting_topic,$start_time,$end_time,$place)
{
  require('connect_db.php');
  $sql_insert = "INSERT INTO tbl_meeting(meeting_date,meeting_topic,start_time,end_time,place) VALUES('$meeting_date','$meeting_topic','$start_time','$end_time','$place')";
  mysqli_query($conn,$sql_insert);
  $text_response = 'เรียบร้อยครับ ปุกปุยบันทึกข้อมูลการประชุมลงสมุดแล้ว ไว้ใกล้ถึงวัน ปุกปุยจะเตือนอีกทีนะครับ';
  response($text_response);
}
function response($text_response)
{
  $json = '{
              "speech": "'.$text_response.'",
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
  $request = json_decode($requestBody,true);
  $command = $request['result']['parameters']['command'];
  if($command == 'creat')
  {
    $meeting_date = $request['result']['parameters']['date']; 
    $start_time = $request['result']['parameters']['start_time'];
    $end_time = $request['result']['parameters']['end_time'];
    $meeting_topic = $request['result']['parameters']['topic'];
    $place = $request['result']['parameters']['place_creat'];
    creat_meeting($meeting_date,$meeting_topic,$start_time,$end_time,$place);
  
  }
}else{
	echo "Method Not allow";
}



?>