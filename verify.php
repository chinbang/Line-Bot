<?php
$access_token = 'wMY34FlA+UC4+QFSMOHochdcD+DxRedLAMprFAZIUxFm3jleTwOaDxfUBHhznqtKnsvtiCjbpdt3z4VQk1N6dJIr+zpx6YKxZXfxTmAb/A2Hpp9OtrmYyp/iySWL8s+DakhTulCikIOp6E+G8M8vgwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>
