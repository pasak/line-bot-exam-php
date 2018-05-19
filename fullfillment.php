<?
header('Content-Type: application/json');

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);

$a = [
  "fulfillmentText" =>  $update['queryResult']['action'] .' '.
                        $update['queryResult']['parameters']['place']
];
echo json_encode($a);
?>
