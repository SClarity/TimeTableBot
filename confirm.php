<?php
$target= $_GET["Target"];
$time= $_GET["Time"];

$daurl = 'https://api.chatfuel.com/bots/592eabfae4b0c446212c0749/users/' .$target . '/send?chatfuel_token=vnbqX6cpvXUXFcOKr5RHJ7psSpHDRzO1hXBY8dkvn50ZkZyWML3YdtoCnKH7FSjC&chatfuel_block_id=5935e2ade4b0c446340feeb9&Time=' .$time . '';

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