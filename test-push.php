<?php
$access_token = '0zhyZeKzFbPrHc3wsukcNfHJngX61gJnyJBjCAMdiZGlro3eJFu3s4eP1FM3t9psiiHlnZYG2FgRgmgIOFMK0HiPcFTxXshD9eN3Ir+rNe1Cci10aV5Y1pDJPvBvPHoNKXDDxcQT9VXotv9vcpzoDgdB04t89/1O/w1cDnyilFU=';

$json = '[{"type":"template","altText":"ดูห้องพัก โรงแรมตัวอย่าง เมืองเชียงใหม่","template":{"type":"carousel","columns":[{"thumbnailImageUrl":"https:\/\/tripmaster.co\/upload\/hotel\/room\/1.png","text":"ดีลักซ์ ทวิน","actions":[{"type":"message","label":"ดูราคา","text":"ดูราคา 5 ดีลักซ์ ทวิน"},{"type":"message","label":"ดูรายละเอียด","text":"ดูรายละเอียด 5 ดีลักซ์ ทวิน"}]},{"thumbnailImageUrl":"https:\/\/tripmaster.co\/upload\/hotel\/room\/9.png","text":"ดีลักซ์ ดับเบิล","actions":[{"type":"message","label":"ดูราคา","text":"ดูราคา 6 ดีลักซ์ ดับเบิล"},{"type":"message","label":"ดูรายละเอียด","text":"ดูรายละเอียด 6 ดีลักซ์ ดับเบิล"}]}]}}]';
//	'[{"type":"sticker","packageId":"2","stickerId":"41"},{"type":"text","text":"สรุปรายการจองห้องพัก\nโรงแรมตัวอย่าง เมืองเชียงใหม่\nดีลักซ์ ดับเบิล\nราคาคนกันเอง!\nวันที่ 20 พฤษภาคม 2561\n1 คืน\n1 ห้อง\nรวม 1,000 บาท\nราคารวมค่าบริการและภาษี"},{"type":"template","altText":"ยืนยันการจอง","template":{"type":"buttons","text":"ยืนยันการจอง","actions":[{"type":"message","label":"Yes","text":"ยืนยันการจอง 6 1 +BF ดีลักซ์ ดับเบิล ราคาคนกันเอง! เพิ่มอาหารเช้า"},{"type":"message","label":"No","text":"ปฏิเสธการจอง"}]}}]';

$messages = json_decode($json,true);
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'Ufe4c105ec12e9334813a95dc5c5e758b',
// 				'to' => 'U89c37c01fe7219f134382e1dc7e896ba',
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
