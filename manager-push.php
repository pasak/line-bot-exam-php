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

$post = '{"to":"U89c37c01fe7219f134382e1dc7e896ba","messages":[{"type":"sticker","packageId":"1","stickerId":"138"},{"type":"flex","altText":"\u0e23\u0e32\u0e22\u0e01\u0e32\u0e23\u0e08\u0e2d\u0e07\u0e2b\u0e49\u0e2d\u0e07\u0e1e\u0e31\u0e01","contents":{"type":"bubble","header":{"type":"box","layout":"vertical","contents":[{"type":"text","text":"\u0e23\u0e32\u0e22\u0e01\u0e32\u0e23\u0e08\u0e2d\u0e07\u0e2b\u0e49\u0e2d\u0e07\u0e1e\u0e31\u0e01","weight":"bold","color":"#1E90FF","size":"sm"}]},"hero":{"type":"image","url":"https:\/\/tripmaster.co\/upload\/hotel\/room1.png","size":"full","aspectRatio":"2:1"},"body":{"type":"box","layout":"vertical","contents":[{"type":"text","text":"\u0e42\u0e23\u0e07\u0e41\u0e23\u0e21\u0e15\u0e31\u0e27\u0e2d\u0e22\u0e48\u0e32\u0e07 \u0e40\u0e21\u0e37\u0e2d\u0e07\u0e40\u0e0a\u0e35\u0e22\u0e07\u0e43\u0e2b\u0e21\u0e48","weight":"bold","wrap":true,"size":"sm","margin":"md"},{"type":"separator","margin":"xxl"},{"type":"box","layout":"vertical","margin":"xxl","spacing":"sm","contents":[{"type":"box","layout":"horizontal","contents":[{"type":"text","text":"\u0e1b\u0e23\u0e30\u0e40\u0e20\u0e17\u0e2b\u0e49\u0e2d\u0e07","size":"sm","color":"#555555","flex":0},{"type":"text","text":"\u0e14\u0e35\u0e25\u0e31\u0e01\u0e0b\u0e4c \u0e17\u0e27\u0e34\u0e19","size":"sm","color":"#111111","align":"end"}]},{"type":"box","layout":"horizontal","contents":[{"type":"text","text":"\u0e27\u0e31\u0e19\u0e17\u0e35\u0e48","size":"sm","color":"#555555","flex":0},{"type":"text","text":"7 \u0e01\u0e23\u0e01\u0e0e\u0e32\u0e04\u0e21","size":"sm","color":"#111111","align":"end"}]},{"type":"box","layout":"horizontal","contents":[{"type":"text","text":"\u0e08\u0e33\u0e19\u0e27\u0e19","size":"sm","color":"#555555","flex":0},{"type":"text","text":"2 \u0e04\u0e37\u0e19 1 \u0e2b\u0e49\u0e2d\u0e07","size":"sm","color":"#111111","align":"end"}]},{"type":"separator","margin":"xxl"},{"type":"box","layout":"horizontal","margin":"xxl","contents":[{"type":"text","text":"\u0e23\u0e32\u0e04\u0e32\u0e23\u0e27\u0e21\u0e04\u0e48\u0e32\u0e1a\u0e23\u0e34\u0e01\u0e32\u0e23\u0e41\u0e25\u0e30\u0e20\u0e32\u0e29\u0e35\/\u0e2b\u0e49\u0e2d\u0e07","size":"sm","color":"#111111"}]},{"type":"box","layout":"horizontal","contents":[{"type":"text","text":"\u0e2a. 7 \u0e01.\u0e04.","size":"sm","color":"#555555"},{"type":"text","text":"2,684 \u0e1a\u0e32\u0e17","size":"sm","color":"#111111","align":"end"}]},{"type":"box","layout":"horizontal","contents":[{"type":"text","text":"\u0e2d\u0e32. 8 \u0e01.\u0e04.","size":"sm","color":"#555555"},{"type":"text","text":"1,677 \u0e1a\u0e32\u0e17","size":"sm","color":"#111111","align":"end"}]},{"type":"box","layout":"baseline","margin":"xl","contents":[{"type":"text","text":"\u0e23\u0e27\u0e21","size":"sm","color":"#555555","flex":1},{"type":"text","text":"4,361","size":"xl","color":"#1E90FF","flex":0},{"type":"text","text":"\u0e1a\u0e32\u0e17","size":"sm","color":"#111111","flex":1,"align":"end"}]},{"type":"box","layout":"horizontal","margin":"xl","contents":[{"type":"text","text":"\u0e41\u0e1e\u0e47\u0e01\u0e40\u0e01\u0e47\u0e08\u0e23\u0e32\u0e04\u0e32","size":"sm","color":"#555555"},{"type":"text","text":"\u0e08\u0e48\u0e32\u0e22\u0e17\u0e35\u0e2b\u0e25\u0e31\u0e07","size":"sm","color":"#111111","align":"end"}]},{"type":"box","layout":"horizontal","contents":[{"type":"text","text":"\u0e01\u0e48\u0e2d\u0e19\u0e27\u0e31\u0e19\u0e17\u0e35\u0e48","size":"sm","color":"#555555"},{"type":"text","text":"1 \u0e21\u0e01\u0e23\u0e32\u0e04\u0e21","size":"sm","color":"#111111","align":"end"}]}]},{"type":"separator","margin":"xxl"},{"type":"box","layout":"horizontal","margin":"md","contents":[{"type":"text","text":"\u0e02\u0e2d\u0e23\u0e31\u0e1a\u0e40\u0e07\u0e34\u0e19\u0e04\u0e37\u0e19\u0e44\u0e21\u0e48\u0e44\u0e14\u0e49","size":"xs","color":"#ff0000","flex":0}]}]}}},{"type":"flex","altText":"\u0e22\u0e37\u0e19\u0e22\u0e31\u0e19\u0e01\u0e32\u0e23\u0e08\u0e2d\u0e07","contents":{"type":"bubble","body":{"type":"box","layout":"vertical","spacing":"md","contents":[{"type":"text","text":"\u0e22\u0e37\u0e19\u0e22\u0e31\u0e19\u0e01\u0e32\u0e23\u0e08\u0e2d\u0e07","flex":0},{"type":"button","style":"primary","flex":1,"action":{"type":"message","label":"Yes","text":"\u0e22\u0e37\u0e19\u0e22\u0e31\u0e19\u0e01\u0e32\u0e23\u0e08\u0e2d\u0e07\u0e2b\u0e49\u0e2d\u0e07\u0e1e\u0e31\u0e01 57"}},{"type":"button","style":"secondary","flex":1,"action":{"type":"message","label":"No","text":"\u0e1b\u0e0f\u0e34\u0e40\u0e2a\u0e18\u0e01\u0e32\u0e23\u0e08\u0e2d\u0e07\u0e2b\u0e49\u0e2d\u0e07\u0e1e\u0e31\u0e01 57"}}]}}}]}';

echo "<br><br>post $post";
/*
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
echo "<br><br>result " $result . "\r\n";*/
?>
