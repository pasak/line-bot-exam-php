<?php
$access_token = '0zhyZeKzFbPrHc3wsukcNfHJngX61gJnyJBjCAMdiZGlro3eJFu3s4eP1FM3t9psiiHlnZYG2FgRgmgIOFMK0HiPcFTxXshD9eN3Ir+rNe1Cci10aV5Y1pDJPvBvPHoNKXDDxcQT9VXotv9vcpzoDgdB04t89/1O/w1cDnyilFU=';

$json = '[{"type":"image","id":"7781005684099"}]';
$messages = json_decode($json,true);

$messages = array(
	['type' => 'image',
	 'id'   => '7781005684099']
);
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
