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
echo json_encode($a);
?>
