<?php
      $messages = [
				'type' => 'template',
        "altText"   => "this is a carousel template",
				'template' => [
          'type'      => 'carousel',
          // 'actions'   => [],
          'columns'   => [
            [
              "thumbnailImageUrl" => "http://postfiles8.naver.net/MjAxODAxMjRfMTg2/MDAxNTE2NzgwMDEyMTYw.5FIcKqzP0B5Cf3o0yd8DXX2lpI0WXQ4uEP6rSnOe0Pgg.oWHdoV_QXXes9SctFAz6Venn-mfxUlaQZapF9gyyhwMg.JPEG.destroyerx/spaghetti-1987454_1920.jpg?type=w2",
              "title"             => "                     Pasta",
              "text"              => "        Choose the menu below",
              'actions'           => [
                [
                  "type"  => "message",
                  "label" => "Tomato Pasta",
                  "text"  => "Tomato Pasta"
                ]
              ]
            ]
          ]
        ]
			];

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/push';
			$data = [
				'to' => 'U89c37c01fe7219f134382e1dc7e896ba',
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);
			echo $result . "\r\n";
?>