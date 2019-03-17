<?php
	function flex_msg()
	{
			$json1 = '{
						"type":"flex",
						"altText":"Green Office",
						"contents":{
									"type": "bubble",
									"header": {
												"type": "box",
												"layout": "horizontal",
												"contents": [
																{
																	"type": "text",
																	"text": "ประชาสัมพันธ์",
																	"weight": "bold",
																	"color": "#B7F4A9",
																	"align": "center",
																	"size": "md"
																}
															]
											  },
									"hero": {
												"type": "image",
												"url": "https://meetingnotify.herokuapp.com/pic/the-assist.png",
												"size": "full",
												"aspectRatio": "20:13",
												"aspectMode": "cover"
											},
									
									"footer": {
												"type": "box",
												"layout": "vertical",
												"contents": [
																{
																	"type": "spacer",
																	"size": "xs"
																},
																{
																	"type": "button",
																	"style": "primary",
																	"color": "#B7F4A9",
																	"action": {
																				"type": "uri",
																				"label": "รายละเอียด",
																				"uri": "https://linecorp.com"
																				}
																}
															]
										}		
								}
						}';
		$result = json_decode($json1);
		return $result;
	}
	function push()
	{
		$access_token = 'HScoQtJ9WeTsUePpz0xZ7vo//Tm7j+PR/LCoi09r4L7XDPJVZr/Bc3iSn6NGBJVa8LpQM446o/uIUbLxOfjm09FDX+73peOuXqHvKttcHLeqogyWj0RU/Vqj1LapFoxfp2lOPYq4O8ErqPnZGyRpPAdB04t89/1O/w1cDnyilFU=';
        $id = 'Ua9ba6c25071c19588c095ec147efe2b1';
		//$messages = [ 'type' => 'text','text' => "jdakljkskljd"];
		$messages = flex_msg();
        $url = 'https://api.line.me/v2/bot/message/push';
        $data = ['to' => $id,'messages' => [$messages]];
        $post = json_encode($data);
        $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        $result = curl_exec($ch);
        curl_close($ch); 
	}
	push();
	echo "OK.....นะคะ";
?>