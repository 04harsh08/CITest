<?php
$opt1 = $argv[1];
$apiKey = $argv[2];
$opt2 = $argv[3];
$apiSecret = $argv[4];
$opt3 = $argv[5];
$file = $argv[6];
$opt4 = $argv[7];
$ci = $argv[8];

$path = $argv[8]."/job/CI/ws/".$file;
//$v1 = "67046dbd-6463-4b28-850c-17db29fe939b";
//$v2 = "c48a8e21-786b-4301-827a-eb58fe568322";

$url = 'http://10.187.39.62:8080/api_select/';
$data = array('apiKey' => $apiKey, 'apiSecret' => $apiSecret, 'URL' => $path);

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error */ }

var_dump($result);




?>
