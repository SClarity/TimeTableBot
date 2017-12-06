<?php
$target= $_GET["Target"];
$people= $_GET["People"];
$name= urlencode($_GET["Name"]);
$time= $_GET["Time"];
$user= $_GET["User"];
$phone= urlencode($_GET["Phone"]);

$daurl = 'https://api.chatfuel.com/bots/592eabfae4b0c446212c0749/users/' .$target . '/send?chatfuel_token=vnbqX6cpvXUXFcOKr5RHJ7psSpHDRzO1hXBY8dkvn50ZkZyWML3YdtoCnKH7FSjC&chatfuel_block_id=59398fc7e4b0ef6705bb5826&People=' .$people . '&Name=' .$name . '&Phone=' .$phone . '&Time=' .$time . '&User=' .$user . '';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$daurl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
curl_close ($ch);
echo $server_output . "\n";

echo $daurl;
?>