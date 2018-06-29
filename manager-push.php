<?php
$_return = array();

$FieldArray = array('access_token','LineUserID','messages');

foreach ($FieldArray as $Field)
  $_return[$Field] = $_REQUEST[$Field];

echo json_encode($_return,JSON_UNESCAPED_UNICODE);
?>
