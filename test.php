<?php
// create cURL resource




$resultArray = array();
function getData()
{
    
    $authorization = "Authorization: Bearer ella_v1_43992bdaaa421ace8d51228bdc53a486cbba0a01";

    $ch = curl_init();

    //set cURL options 
    curl_setopt($ch, CURLOPT_URL, "https://crownfooddelivery.trigma.in/web/v2/menu/getmenu");

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', $authorization));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);
    $resultArray =  json_decode($result);
    print_r($resultArray);
    echo "<br><br>";
}


    getData();


