<?php
$target= $_GET["Target"];
$time= $_GET["Time"];

$daurl = 'https://api.chatfuel.com/bots/' .$target . '/send?chatfuel_token=[INSERT_CHATFUEL_TOKEN_HERE]&chatfuel_block_id=59398f16e4b0ef6705b99be0&Time=' .$time . '';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$daurl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output . "\n";

echo $daurl;
echo "<script>window.close();</script>";
?>
