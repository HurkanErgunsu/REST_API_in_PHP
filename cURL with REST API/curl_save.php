<?php
$url = "https://reqres.in/api/users?page=2";
$ch = curl_init();

$targetField = "downloaded_file.zip";

$fh = fopen($targetField, "w");

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FILE, $fh);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
    echo $e;
}

fclose($fh);
curl_close($ch);
?>