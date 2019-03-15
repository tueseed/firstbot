<?php
	function flex_msg()
	{
			$json1 = '{
						"type":"flex",
						"altText":"แจ้งเตือนการประชุม",
						"contents":{
									"type": "bubble",
									"header": {
												"type": "box",
												"layout": "horizontal",
												"contents": [
																{
																	"type": "text",
																	"text": "THE ASSISTANT",
																	"weight": "bold",
																	"color": "#5b2a72",
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
									"body": {
												"type": "box",
												"layout": "vertical",
												"spacing": "sm",
												"contents": [
															 {
																"type": "text",
																"text": "แจ้งเตือนการประชุม",
																"size": "xl",
																"align": "center",
																"weight": "bold"
															},
															{
																"type": "box",
																"layout": "vertical",
																"spacing": "sm",
																"contents": [
																				{
																					"type": "box",
																					"layout": "baseline",
																					"contents": [
																									{
																										"type": "icon",
																										"url": "https://meetingnotify.herokuapp.com/pic/content.png"
																									},
																									{
																										"type": "text",
																										"text": "เรื่องอะไร",
																										"wrap": true,																	
																										"margin": "sm",
																										"flex": 0
																									}
																								]
																				},
																				{
																					"type": "box",
																					"layout": "baseline",
																					"contents": [
																									{
																										"type": "icon",
																										"url": "https://meetingnotify.herokuapp.com/pic/calendar.png"
																									},
																									{
																										"type": "text",
																										"text": "วันที่ รอคอย",																								
																										"margin": "sm",
																										"flex": 0
																									}
																								]
																				},
																				{
																					"type": "box",
																					"layout": "baseline",
																					"contents": [
																									{
																										"type": "icon",
																										"url": "https://meetingnotify.herokuapp.com/pic/alarm-clock.png"
																									},
																									{
																										"type": "text",
																										"text":"เวลา",																								
																										"margin": "sm",
																										"flex": 0
																									}
																								]
																				},
																				{
																					"type": "box",
																					"layout": "baseline",
																					"contents": [
																									{
																										"type": "icon",
																										"url": "https://meetingnotify.herokuapp.com/pic/school.png"
																									},
																									{
																										"type": "text",
																										"text":"สถานที่",																								
																										"margin": "sm",
																										"flex": 0
																									}
																								]
																				},
																				{
																					"type": "box",
																					"layout": "baseline",
																					"contents": [
																									{
																										"type": "icon",
																										"url": "https://meetingnotify.herokuapp.com/pic/meeting.png"
																									},
																									{
																										"type": "text",
																										"text": "ผู้เข้าประชุม",																								
																										"margin": "sm",
																										"flex": 0
																									}
																								]
																				}
																			]
															},
															{
																"type": "text",
																"text": "555+",
																"wrap": true,
																"color": "#aaaaaa",
																"size": "xxs"
															}
															]
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
																	"color": "#5b2a72",
																	"action": {
																				"type": "uri",
																				"label": "เอกสารการประชุม",
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