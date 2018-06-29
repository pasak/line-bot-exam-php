<?php
$_return = array();

$FieldArray = array('access_token','PostURL');

foreach ($FieldArray as $Field)
  $_return[$Field] = $_REQUEST[$Field];

// $json = file_get_contents($url, false, stream_context_create($arrContextOptions));

echo json_encode($_return,JSON_UNESCAPED_UNICODE);

// Make a POST Request to Messaging API to reply to sender
$url = 'https://api.line.me/v2/bot/message/push';

$post = file_get_contents($PostURL);

$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo "<br><br>result " $result . "\r\n";
?>
