<?
header('Content-Type: application/json');

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);

$a = [

  "fulfillmentText" =>
    'คุณต้องการจองโรงแรม ' . $update['queryResult']['parameters']['place']
    .' วันที่ ' . $update['queryResult']['parameters']['date'] .' '.
    $update['queryResult']['parameters']['room'] .' ห้อง '.
    $update['queryResult']['parameters']['night'] .' คืน '
];
/*
  "fulfillmentMessages" => [
      [
        "card" => [
          "title" => "โรงแรมตัวอย่าง",
          "subtitle" => "ราคาเริ่มต้น 1,601 บาท",
          "imageUri" => "https://tripmaster.co/upload/hotel/logo/1.jpg",
          "buttons" => [
            [
              "text" => "ดูห้องพัก ",
              "postback" => "https://dummyhotel.online/"
            ]
          ]
        ]
      ]
    ]];
*/  
echo json_encode($a);
?>
