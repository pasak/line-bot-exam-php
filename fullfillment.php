<?
header('Content-Type: application/json');

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);

$a = [
  "fulfillmentText" =>
    'คุณต้องการจองโรงแรม ' . $parameters['place'] .' วันที่ '.
    $parameters['date'] .' '. $parameters['room'] .' ห้อง '.
    $parameters['night'] .' คืน ' ;
];
echo json_encode($a);
?>
