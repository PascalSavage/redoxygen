<?php

//$user = "user3";
$pass = "P@ssword";

/*$id = "0514238c669ca392205fbc4b6b79be";
$incident = 37;
$step = "Nakazilo";
$value = 20000;*/

$user = $_GET['user'];
$id = $_GET['id'];
$incident = $_GET['inci'];
$step = $_GET['step'];
$value = $_GET['value'];

$d2 = array("Value" => $value);
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
curl_exec($ch);
sleep(1);
$newURL = "getdata.php?user=".$user;
 header('Location: '.$newURL);                                                                                                                    

?>