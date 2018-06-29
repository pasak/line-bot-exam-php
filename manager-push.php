<?php
$fp = fopen('php://input', 'r');
$rawData = stream_get_contents($fp);

echo "<pre>";
print_r($rawData);
echo "</pre>";
?>
