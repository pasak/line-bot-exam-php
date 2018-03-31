<?php // callback.php
require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
// $access_token = '3ALKAbKFoGuJyJnoDdn0HeyfbxLFtEXBKiC0lFeoNl/XbL4WhoCZzefp2n7UDuXaCWfErIDro07BnZNggJmXJChXTIlMPo8LRJ+n1LEgbRUaKehDkiCr5p5CakHrPX+gauOGX/R5bB2e5yi7xjnHDAdB04t89/1O/w1cDnyilFU=';
$access_token = '0zhyZeKzFbPrHc3wsukcNfHJngX61gJnyJBjCAMdiZGlro3eJFu3s4eP1FM3t9psiiHlnZYG2FgRgmgIOFMK0HiPcFTxXshD9eN3Ir+rNe1Cci10aV5Y1pDJPvBvPHoNKXDDxcQT9VXotv9vcpzoDgdB04t89/1O/w1cDnyilFU=';

$arrContextOptions=array(
      "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		// if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			// $text = $event['source']['userId'];
			// $text = 'userId ' . $event['source']['userId'] . ' message ' . $event['message']['text'];

      // pass and get value from TripMaster.co

      if ($event['source']['type'] == 'user') $ParentID = '' ;

      else $ParentID = ($event['source']['type'] == 'group') ? $event['source']['groupId'] : $event['source']['roomId'] ;

      $url = 'https://tripmaster.co/ajax/line.php?Token=ChIJy1naz5o62jARbsePVZKbV78' .
             '&SourceType=' . $event['source']['type'] . '&ParentID=' . $ParentID .
             '&UserID='. $event['source']['userId'] . '&ReplyToken=' . $event['replyToken'] .
             '&MessageID=' . $event['message']['id'] . '&MessageType=' . $event['message']['type'] .
             '&Text=' . urlencode($event['message']['text']);

      $text = file_get_contents($url, false, stream_context_create($arrContextOptions));

// 	$json = file_get_contents($url, false, stream_context_create($arrContextOptions));
//       $jsonObject = json_decode($json,true);

			// Get replyToken
			$replyToken = $event['replyToken'];
			// Build message to reply back
 			$messages = [
				'type' => 'text',
				'text' => $text
			];

      $messages = [
	'type' => 'template',
        "altText"   => "this is a carousel template",
	'template' => [
          'type'      => 'carousel',
          'columns'   => [
            [
              "thumbnailImageUrl" => "http://postfiles8.naver.net/MjAxODAxMjRfMTg2/MDAxNTE2NzgwMDEyMTYw.5FIcKqzP0B5Cf3o0yd8DXX2lpI0WXQ4uEP6rSnOe0Pgg.oWHdoV_QXXes9SctFAz6Venn-mfxUlaQZapF9gyyhwMg.JPEG.destroyerx/spaghetti-1987454_1920.jpg?type=w2",
              "title"             => "                     Pasta",
              "text"              => "        Choose the menu below",
		'actions'           => [
		  [
		    "type"  => "message",
		    "label" => "Tomato Pasta",
		    "text"  => "Tomato Pasta"
		  ]
		]
            ]
          ]
        ]
	];

		// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
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
		// }
	}
}
echo "OK";
