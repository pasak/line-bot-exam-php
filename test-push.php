<?php
$access_token = '0zhyZeKzFbPrHc3wsukcNfHJngX61gJnyJBjCAMdiZGlro3eJFu3s4eP1FM3t9psiiHlnZYG2FgRgmgIOFMK0HiPcFTxXshD9eN3Ir+rNe1Cci10aV5Y1pDJPvBvPHoNKXDDxcQT9VXotv9vcpzoDgdB04t89/1O/w1cDnyilFU=';

$messages = [
  ["type":"text","text":"ดูโปรแกรม ดอยอินทนนท์, ขุนวาง, ดอยสุเทพ, ดอยปุย\nวันที่ 1"],
  [
    "type":"template",
    "altText":"สถานที่ท่องเที่ยว วันที่ 1",
    "template":[
      "type":"carousel",
      "columns":[
        [
          "thumbnailImageUrl":"https://tripmaster.co/images/attraction/1/s/10.jpg",
          "title":"ดอยอินทนนท 3 ชม.",
          "actions":[
            ["type":"message","label":"ดูรูปเพิ่มเติม","text":"ดูรูปเพิ่มเติม ดอยอินทนนท์"]
          ]
        ],
        [
          "thumbnailImageUrl":"https://tripmaster.co/images/attraction/11/s/110.jpg",
          "title":"ขุนวาง 2 ชม.",
          "actions":[
            ["type":"message","label":"ดูรูปเพิ่มเติม","text":"ดูรูปเพิ่มเติม ขุนวาง"]
          ]
        ]
      ]
    ]
    ]
  ];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'U89c37c01fe7219f134382e1dc7e896ba',
				'messages' => [$messages],
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
