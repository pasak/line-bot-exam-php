<?php // callback.php
// require "vendor/autoload.php";
// require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$access_token = $_REQUEST['Token'];

echo '$access_token ', $access_token;

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
// if (!is_null($events['events'])) {
	// Loop through each event
// 	foreach ($events['events'] as $event) {
      if ($event['source']['type'] == 'user') $ParentID = '' ;
      else $ParentID = ($event['source']['type'] == 'group') ? $event['source']['groupId'] : $event['source']['roomId'] ;
      $url = 'https://tripmaster.co/line/provider-reply.php?Token=' . $access_token .
             '&SourceType=' . $event['source']['type'] . '&ParentID=' . $ParentID .
             '&UserID='. $event['source']['userId'] . '&ReplyToken=' . $event['replyToken'] .
             '&MessageID=' . $event['message']['id'] . '&MessageType=' . $event['message']['type'] .
             '&Text=' . urlencode($event['message']['text']);
      $json = file_get_contents($url, false, stream_context_create($arrContextOptions));
      $messages = json_decode($json,true);
//   $messages = array(['type' => 'text','text' => 'Tourist Reply']);
			// Get replyToken
			$replyToken = $event['replyToken'];
      // Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
      // foreach ($messages as $message) {
  			$data = [
  				'replyToken' => $replyToken,
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
		  // }
// 	}
// }
// echo "OK";
