<?php
$url = "https://reqres.in/api/users/2";
$ch = curl_init();

$data_array = array(
    'name' => 'Hürkan Ergünsu',
    'job' => 'Software Developer'
);

$data = http_build_query($data_array);

$header = array(
    'Authorization: sklkjclkelklej'
);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

$resp = curl_exec($ch);

if($e = curl_error($ch)){
    echo $e;
}
else {
    $decoded = json_decode($resp);
    foreach($decoded as $key => $val){
        echo $key . ': ' . $val . '<br>';
    }
}
curl_close($ch);
?>