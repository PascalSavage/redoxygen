<?php

$data = array("Stepname" => "ProsnjaZaKredit");
$data_string = json_encode($data);
//echo "$data_string";
                                                                                                                     
$ch = curl_init('http://88.200.23.139/Crea.Ultimus.Api/api/Process/Nabava/launch');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);     
curl_setopt($ch, CURLOPT_USERPWD, "crea0\user3" . ":" . "P@ssword");  
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                             $newURL = "users.html";
 header('Location: '.$newURL);                                                                                          
$result = curl_exec($ch);

?>