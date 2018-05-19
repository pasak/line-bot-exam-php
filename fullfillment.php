<?php
header('Content-Type: application/json');
$a = [
  "finalResponse" => [
    "richResponse" => [
      "items" => [
        [
          "simpleResponse" => [
            "textToSpeech" => "Sure thing!",
            "displayText" => "Sure, thing?"
          ]
        ]
      ]
    ]
  ]
];
echo json_encode($a);
?>
