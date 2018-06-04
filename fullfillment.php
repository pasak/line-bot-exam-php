<?
header('Content-Type: application/json');

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);

$a = [
/*
  "fulfillmentText" =>
    'คุณต้องการจองโรงแรม ' . $update['queryResult']['parameters']['place']
    .' วันที่ ' . $update['queryResult']['parameters']['date'] .' '.
    $update['queryResult']['parameters']['room'] .' ห้อง '.
    $update['queryResult']['parameters']['night'] .' คืน '
];
*/
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
    ],
    "source" => "example.com",
    "payload" => [
      "google" => [
        "expectUserResponse" => true,
        "richResponse" => [
          "items" => [
            [
              "simpleResponse" => [
                "textToSpeech" => "this is a simple response"
              ]
            ]
          ]
        ]
      ],
      "facebook" => [
        "text" => "Hello, Facebook!"
      ],
      "slack" => [
        "text" => "This is a text response for Slack."
      ]
    ]
];

echo json_encode($a);
?>
