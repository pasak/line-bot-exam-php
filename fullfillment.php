<?
header('Content-Type: application/json');

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);

$a = [
  "fulfillmentMessages" => [
      [
        "card" => [
          "title" => "card title",
          "subtitle" => "card text",
          "imageUri" => "https://assistant.google.com/static/images/molecule/Molecule-Formation-stop.png",
          "buttons" => [
            [
              "text" => "button text",
              "postback" => "https://assistant.google.com/"
            ]
          ]
        ]
      ]
    ]];
echo json_encode($a);
?>
