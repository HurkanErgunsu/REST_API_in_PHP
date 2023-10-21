<?php 
$url = file_get_contents("https://reqres.in/api/users?page=2");
var_dump($url);
// $decoded = json_decode($url, true);
// print_r($decoded);
?>