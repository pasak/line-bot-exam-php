<?php
$access_token = '0zhyZeKzFbPrHc3wsukcNfHJngX61gJnyJBjCAMdiZGlro3eJFu3s4eP1FM3t9psiiHlnZYG2FgRgmgIOFMK0HiPcFTxXshD9eN3Ir+rNe1Cci10aV5Y1pDJPvBvPHoNKXDDxcQT9VXotv9vcpzoDgdB04t89/1O/w1cDnyilFU=';

$json = '[{"type":"template","altText":"ราคา ดีลักซ์ ดับเบิล","template":{"type":"carousel","columns":[{"title":"ราคาคนกันเอง!","text":"1,501 บาท จ่ายทันที","actions":[{"type":"message","label":"จองเลย","text":"จองเลย 6 1 ดีลักซ์ ดับเบิล ราคาคนกันเอง!"}]},{"title":"ราคาคนกันเอง!","text":"1,736 บาท จ่ายทันที เพิ่มอาหารเช้า","actions":[{"type":"message","label":"จองเลย","text":"จองเลย 6 1 +BF ดีลักซ์ ดับเบิล ราคาคนกันเอง! เพิ่มอาหารเช้า"}]},{"title":"จ่ายทีหลัง","text":"1,677 บาท ก่อนวันที่ 27 เมษายน 2561","actions":[{"type":"message","label":"จองเลย","text":"จองเลย 6 2 ดีลักซ์ ดับเบิล จ่ายทีหลัง"}]},{"title":"จ่ายทีหลัง","text":"1,913 บาท ก่อนวันที่ 27 เมษายน 2561 เพิ่มอาหารเช้า","actions":[{"type":"message","label":"จองเลย","text":"จองเลย 6 2 +BF ดีลักซ์ ดับเบิล จ่ายทีหลัง เพิ่มอาหารเช้า"}]},{"title":"จ่าย ณ ที่พัก","text":"1,766 บาท","actions":[{"type":"message","label":"จองเลย","text":"จองเลย 6 3 ดีลักซ์ ดับเบิล จ่าย ณ ที่พัก"}]},{"title":"จ่าย ณ ที่พัก","text":"2,001 บาท เพิ่มอาหารเช้า","actions":[{"type":"message","label":"จองเลย","text":"จองเลย 6 3 +BF ดีลักซ์ ดับเบิล จ่าย ณ ที่พัก เพิ่มอาหารเช้า"}]}]}}]';

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
