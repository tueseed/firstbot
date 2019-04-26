<?php
    $uid = 'Ua9ba6c25071c19588c095ec147efe2b1';
    $access_token = 'fWLrTK5krDwyg4qvrzWjMOswkmL7kuackgKM+6p2XA6gMSUGN1mUVJ1NupFWc/KWqs9uuem2vLryNsrE9m1TqfxVMXBpo7UFo40XP1s3ZCzDZTxbyQaiww3NiUGzXPXLYkPcBeqKDnVrrHo4yri5twdB04t89/1O/w1cDnyilFU=';
    $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
    $ch = curl_init('https://api.line.me/v2/bot/profile/'.$uid);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    $result1 = json_encode($result);
    echo $result1;
?>