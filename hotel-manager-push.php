<?php
$access_token = 'KYJc8n+UE8YPsIa2qDo5hVNQ0u2JQ1Cy4tEW1qIRg1i4r+bgoy/xfDfdXQypmoVaBmHixhavlpkc3b7KX+648A9Fu3DrdxX1NeoEzjU9uWqn9vFwwaoFkUlQlZEbJW3tR5jsg7UPa+wTuTxU/PAVTAdB04t89/1O/w1cDnyilFU=';
// $access_token = 'nYlB+5Il9ueHsPCsFbWH7ZIftDPAL2eIoM/dslp5y/lx7NwJrE4Y/gplCmDBjd0X1HQikBdvxewg9HjeDVsCjxkONyg6HDzUVid1n7feCcJ0fUbEdUDW8fSJ/gbVv9jioZVaMmb4Sup/uINcAlaZpwdB04t89/1O/w1cDnyilFU=';

//$json = '[{"type":"template","altText":"รายชื่อโรงแรม 1","template":{"type":"carousel","columns":[{"thumbnailImageUrl":"https:\/\/tripmaster.co\/upload\/hotel\/logo\/1.jpg","title":"โรงแรมตัวอย่าง","text":"ราคาเริ่มต้น 2,001 บาท","actions":[{"type":"message","label":"VIEW","text":"ดูห้องพัก โรงแรมตัวอย่าง เมืองเชียงใหม่"}]}]}}]';
$json = '[{'type' => 'text','text' => 'Hotel Manger'}]';
$messages = json_decode($json,true);

// print_r($messages);

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
