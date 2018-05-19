<?php
header('Content-Type: application/json');
/*
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
*/
$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
?>
{
"fulfillmentText": "This is a text response",
"fulfillmentMessages": [
  {
    "card": {
      "title": "card title",
      "subtitle": "card text",
      "imageUri": "https://assistant.google.com/static/images/molecule/Molecule-Formation-stop.png",
      "buttons": [
        {
          "text": "button text",
          "postback": "https://assistant.google.com/"
        }
      ]
    }
  }
],
"source": "example.com",
"payload": {
  "google": {
    "expectUserResponse": true,
    "richResponse": {
      "items": [
        {
          "simpleResponse": {
            "textToSpeech": "this is a simple response"
          }
        }
      ]
    }
  },
  "facebook": {
    "text": "Hello, Facebook!"
  },
  "slack": {
    "text": "This is a text response for Slack."
  }
},
"outputContexts": [
  {
    "name": "<?=$update['session']?>",
    "lifespanCount": 5,
    "parameters": {
      "param": "param value"
    }
  }
],
"followupEventInput": {
  "name": "event name",
  "languageCode": "th",
  "parameters": {
    "param": "param value"
  }
}
