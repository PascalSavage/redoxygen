<?php

/*$username = "crea0\user3";
$password = "P@ssword";
$context = stream_context_create(array (
    'http' => array (
        'header' => 'Authorization: Basic ' . base64_encode("$username:$password")
    )
));
$data = file_get_contents($url, false, $context);
echo $data;*/

//$data = "";
//$data_string = json_encode($data);
//echo "$data_string";
  /*                                                                                                                   
$ch = curl_init('http://88.200.23.139/Crea.Ultimus.Api/api/Process/Nabava/');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");                                                                     
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);     
curl_setopt($ch, CURLOPT_USERPWD, "crea0\user3" . ":" . "P@ssword");  
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json')                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);*/
//$result = json_decode($result);



$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "crea0\user3" . ":" . "P@ssword");  
curl_setopt($ch, CURLOPT_URL, 'http://88.200.23.139/Crea.Ultimus.Api/api/Process/Nabava/');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);

echo $obj[0];

?>