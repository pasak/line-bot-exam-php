<?php
$access_token = 'KYJc8n+UE8YPsIa2qDo5hVNQ0u2JQ1Cy4tEW1qIRg1i4r+bgoy/xfDfdXQypmoVaBmHixhavlpkc3b7KX+648A9Fu3DrdxX1NeoEzjU9uWqn9vFwwaoFkUlQlZEbJW3tR5jsg7UPa+wTuTxU/PAVTAdB04t89/1O/w1cDnyilFU=';

$json = '[{"type":"sticker","packageId":"2","stickerId":"41"},{"type":"text","text":"สรุปรายการจองห้องพัก\nโรงแรมตัวอย่าง เมืองเชียงใหม่\nดีลักซ์ ดับเบิล\nราคาคนกันเอง!\nวันที่ 20 พฤษภาคม 2561\n1 คืน\n1 ห้อง\nรวม 1,000 บาท\nราคารวมค่าบริการและภาษี"},{"type":"template","altText":"ยืนยันการจอง","template":{"type":"buttons","text":"ยืนยันการจอง","actions":[{"type":"message","label":"Yes","text":"ยืนยันการจอง 6 1 +BF ดีลักซ์ ดับเบิล ราคาคนกันเอง! เพิ่มอาหารเช้า"},{"type":"message","label":"No","text":"ปฏิเสธการจอง"}]}}]';
$json = '[{"type":"template","altText":"View room Muang Chiang Mai Dummy Hotel ","template":{"type":"carousel","columns":[{"thumbnailImageUrl":"https:\/\/tripmaster.co\/upload\/hotel\/room\/1.png","text":"Deluxe Twin","actions":[{"type":"message","label":"View price","text":"View price 5 Deluxe Twin"},{"type":"message","label":"View room description","text":"View room description 5 Deluxe Twin"}]},{"thumbnailImageUrl":"https:\/\/tripmaster.co\/upload\/hotel\/room\/9.png","text":"Deluxe Double","actions":[{"type":"message","label":"View price","text":"View price 6 Deluxe Double"},{"type":"message","label":"View room description","text":"View room description 6 Deluxe Double"}]}]}}]';
$messages = json_decode($json,true);
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'U89c37c01fe7219f134382e1dc7e896ba',
				'messages' => $messages,
			];
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
			echo $result . "\r\n";
?>
