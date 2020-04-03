<?php
try {
    //  $ip=$_GET['ip'];
    $url = 'https://hpb.health.gov.lk/api/get-current-statistical';
    $response = file_get_contents($url);
    $json_array = json_decode($response, true);

    $json_result = json_decode(stripslashes($response), true);
    $json = str_replace("\\", '', $response);
    $jsondata = json_decode($json, true);

    print_r($jsondata['data']['local_new_cases']);
} catch (Exception $e) {
    echo $e->getMessage();
}
