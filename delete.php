<?php

$data = array("id" => "05141699476e108567f3daa8b0687f",
                "IncidentNumber" => 3,
                "StepName" => "Odobritev skrbnika");
$data_string = json_encode($data);

$ch = curl_init('http://88.200.23.139/Crea.Ultimus.Api/api/Process/Nabava/complete');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);     
curl_setopt($ch, CURLOPT_USERPWD, "crea0\user3" . ":" . "P@ssword");  
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);

?>