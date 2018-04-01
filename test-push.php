<?php
$access_token = '0zhyZeKzFbPrHc3wsukcNfHJngX61gJnyJBjCAMdiZGlro3eJFu3s4eP1FM3t9psiiHlnZYG2FgRgmgIOFMK0HiPcFTxXshD9eN3Ir+rNe1Cci10aV5Y1pDJPvBvPHoNKXDDxcQT9VXotv9vcpzoDgdB04t89/1O/w1cDnyilFU=';

$json = '[{"type":"text","text":"วันที่ 1"},{"type":"template","altText":"สถานที่ท่องเที่ยว วันที่ 1","template":{"type":"carousel","columns":[{"thumbnailImageUrl":"https:\/\/tripmaster.co\/images\/attraction\/1\/s\/10.jpg","text":"ดอยอินทนนท์ 3 ชม.","actions":[{"type":"message","label":"ดูรูปเพิ่มเติม","text":"ดูรูปเพิ่มเติม ดอยอินทนนท์"},{"type":"uri","label":"ดอยอินทนนท์ - ไปด้วยกัน","uri":"http:\/\/www.paiduaykan.com\/76_province\/north\/chiangmai\/doiinthanon.html"},{"type":"uri","label":"เที่ยวเต็มอิ่ม ณ ดอยอินทนนท์","uri":"https:\/\/travel.kapook.com\/view684.html"}]},{"thumbnailImageUrl":"https:\/\/tripmaster.co\/images\/attraction\/11\/s\/110.jpg","text":"ขุนวาง 2 ชม.","actions":[{"type":"message","label":"ดูรูปเพิ่มเติม","text":"ดูรูปเพิ่มเติม ขุนวาง"},{"type":"uri","label":"ดอกนางพญาเสือโคร่ง ณ.ขุนวาง","uri":"http:\/\/www.teawteenai.com\/ขุนวาง\/"},{"type":"uri","label":"เส้นทางฝันวันสีชมพู ขุนวาง ขุนช่างเคี่ยน ขุนแม่ยะ","uri":"http:\/\/www.paiduaykan.com\/travel\/ชมดอกนางพญาเสือโคร่ง"}]}]}},{"type":"text","text":"วันที่ 2"},{"type":"template","altText":"สถานที่ท่องเที่ยว วันที่ 2","template":{"type":"carousel","columns":[{"thumbnailImageUrl":"https:\/\/tripmaster.co\/images\/attraction\/15\/s\/150.jpg","text":"พระธาตุศรีจอมทอง 1 ชม.","actions":[{"type":"message","label":"ดูรูปเพิ่มเติม","text":"ดูรูปเพิ่มเติม พระธาตุศรีจอมทอง"},{"type":"uri","label":"วัดพระธาตุศรีจอมทองวรวิหาร","uri":"http:\/\/www.paiduaykan.com\/province\/north\/chiangmai\/watprathatsrijomthong.html"}]},{"thumbnailImageUrl":"https:\/\/tripmaster.co\/images\/attraction\/3\/s\/30.jpg","text":"ดอยสุเทพ 2 ชม.","actions":[{"type":"message","label":"ดูรูปเพิ่มเติม","text":"ดูรูปเพิ่มเติม ดอยสุเทพ"},{"type":"uri","label":"ดอยสุเทพ - ไปด้วยกัน","uri":"http:\/\/www.paiduaykan.com\/76_province\/north\/chiangmai\/doisuthep.html"},{"type":"uri","label":"นั่งรถแดง เที่ยวดอยสุเทพ ดอยปุย พระตำหนักภูพิงค์","uri":"http:\/\/www.folktravel.com\/archive\/doi-suthep-10.html"}]},{"thumbnailImageUrl":"https:\/\/tripmaster.co\/images\/attraction\/10\/s\/100.jpg","text":"ดอยปุย 2 ชม.","actions":[{"type":"message","label":"ดูรูปเพิ่มเติม","text":"ดูรูปเพิ่มเติม ดอยปุย"},{"type":"uri","label":"เส้นทางท่องเที่ยว ขุนช่างเคี่ยน-ดอยปุย-พระตำหนักภูพิงค์-ดอยสุเทพ","uri":"http:\/\/www.chillpainai.com\/scoop\/554"},{"type":"uri","label":"รีวิว เที่ยวขุนช่างเคี่ยน-ดอยปุย-พระตำหนักภูพิงค์","uri":"https:\/\/pantip.com\/topic\/33091524"}]}]}}]';

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
