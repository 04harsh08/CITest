<?php
$opt1 = $argv[1];
$apiKey = $argv[2];
$opt2 = $argv[3];
$apiSecret = $argv[4];
$opt3 = $argv[5];
$file = $argv[6];
$opt4 = $argv[7];
$ci = $argv[8];

 var_dump(${env.JOB_NAME});

$path = $argv[8]."/job/Project_CI/ws/".$file;


$url = 'http://10.187.36.162:9090/api_select/';
$data = array('apiKey' => $apiKey, 'apiSecret' => $apiSecret, 'URL' => $path);

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
