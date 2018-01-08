<?php
$target= $_GET["Target"];
$time= $_GET["Time"];

$daurl = 'https://api.chatfuel.com/bots/[INSERT_BOT_ID_HERE]/users/' .$target . '/send?chatfuel_token=[INSERT_TOKEN_HERE]&chatfuel_block_id=5935e2ade4b0c446340feeb9&Time=' .$time . '';

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
