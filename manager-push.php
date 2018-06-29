<?php
$_return = array();

$FieldArray = array('access_token','PostURL');

foreach ($FieldArray as $Field) {
  ${$Field} = $_REQUEST[$Field];

  echo "<br><br>$Field ", ${$Field};
}
// echo json_encode($_return,JSON_UNESCAPED_UNICODE);

$access_token = str_replace(' ','+',$access_token);

echo "<br><br>access_token $access_token";

$arrContextOptions=array(
      "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

$post = file_get_contents($PostURL, false, stream_context_create($arrContextOptions));

echo "<br><br>post $post";

$url = 'https://api.line.me/v2/bot/message/push';

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
