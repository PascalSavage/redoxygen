<?php

$user = "user3";
$pass = "P@ssword";


$id = "05142303ca24b48071023d3b4de06f";
$incident = 35;
$step = "OdobritevReferenta";
$value = 20000;

$user = $_GET['user'];
$id = $_GET['id'];
$incident = $_GET['inci'];
$step = $_GET['step'];


$d2 = array("OdobritevReferenta" => "Zavrnjeno");
$parametri = json_encode($d2);

$data = array("id" => $id,
                "IncidentNumber" => $incident,
                "StepName" => $step,
                "Parameters" => $d2);
$data_string = json_encode($data);


$ch = curl_init('http://88.200.23.139/Crea.Ultimus.Api/api/Process/Nabava/complete');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);     
curl_setopt($ch, CURLOPT_USERPWD, "crea0\\".$user.":".$pass);  
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);


?>