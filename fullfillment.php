<?
header('Content-Type: application/json');

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);

$a =
[
  "speech" => "This is a simple response for a carousel",
  "data" =>  [
    "google" =>
    [
      "expectUserResponse" => true,
      "richResponse" =>
      [
        "items" =>
        [
          [
            "simpleResponse" =>
            [
              "textToSpeech" => "This is a simple response for a carousel"
            ]
          ]
        ],
        "suggestions" =>
        [
          [
            "title" => "Basic Card"
          ],
          [
            "title" => "List"
          ],
          [
            "title" => "Carousel"
          ],
          [
            "title" => "Suggestions"
          ]
        ]
      ],
      "systemIntent" =>
      [
        "intent" => "actions.intent.OPTION",
        "data" =>
        [
          "@type" => "type.googleapis.com/google.actions.v2.OptionValueSpec",
          "carouselSelect" =>
          [
            "items" =>
            [
              [
                "optionInfo" =>
                [
                  "key" => "title",
                  "synonyms" =>
                  [
                    "synonym of title 1",
                    "synonym of title 2",
                    "synonym of title 3"
                  ]
                ],
                "title" => "Title of First List Item",
                "description" => "This is a description of a carousel item",
                "image" =>
                [
                  "url" => "https://developers.google.com/actions/images/badges/XPM_BADGING_GoogleAssistant_VER.png",
                  "accessibilityText" => "Image alternate text"
                ]
              ],
              [
                "optionInfo" =>
                [
                  "key" => "googleHome",
                  "synonyms" =>
                  [
                    "Google Home Assistant",
                    "Assistant on the Google Home"
                  ]
                ],
                "title" => "Google Home",
                "description" => "Google Home is a voice-activated speaker powered by the Google Assistant.",
                "image" =>
                [
                  "url" => "https://lh3.googleusercontent.com/Nu3a6F80WfixUqf_ec_vgXy_c0-0r4VLJRXjVFF_X_CIilEu8B9fT35qyTEj_PEsKw",
                  "accessibilityText" => "Google Home"
                ]
              ],
              [
                "optionInfo" =>
                [
                  "key" => "googlePixel",
                  "synonyms" =>
                  [
                    "Google Pixel XL",
                    "Pixel",
                    "Pixel XL"
                  ]
                ],
                "title" => "Google Pixel",
                "description" => "Pixel. Phone by Google.",
                "image" =>
                [
                  "url" => "https://storage.googleapis.com/madebygoog/v1/Pixel/Pixel_ColorPicker/Pixel_Device_Angled_Black-720w.png",
                  "accessibilityText" => "Google Pixel"
                ]
              ],
              [
                "optionInfo" =>
                [
                  "key" => "googleAllo",
                  "synonyms" =>
                  [
                    "Allo"
                  ]
                ],
                "title" => "Google Allo",
                "description" => "Introducing Google Allo, a smart messaging app that helps you say more and do more.",
                "image" =>
                [
                  "url" => "https://allo.google.com/images/allo-logo.png",
                  "accessibilityText" => "Google Allo Logo"
                ]
              ]
            ]
          ]
        ]
      ]
    ]
  ]
];
echo json_encode($a);
?>
