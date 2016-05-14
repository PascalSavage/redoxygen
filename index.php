<?php
/*$d2 = array("sample string1" => "",
            "sample string3" => "");
$parametri = json_encode($d2);
$data = array("id" => "sample string1",
              "Status" => "sample string 2",
              "IncidentNumber" => 3,
              "ProcessName" => "sample string 4",
              "StepName" => "sample string 5",
              "AssignedToUserName" => "sample string 6",
              "AssignedToUserFullName" => "sample string 7",
              "Parameters" => $d2,
              "StartTime" => time(),
              "EndTime" => time());                                                                    
$data_string = json_encode($data);   */


$data = array("Stepname" => "ProsnjaZaKredit");
$data_string = json_encode($data);
echo "$data_string";
?>
<p></p>
<?php
/*

{
  "Id": "sample string 1",
  "Status": "sample string 2",
  "IncidentNumber": 3,
  "ProcessName": "sample string 4",
  "StepName": "sample string 5",
  "AssignedToUserName": "sample string 6",
  "AssignedToUserFullName": "sample string 7",
  "Parameters": {
    "sample string 1": {},
    "sample string 3": {}
  },
  "StartTime": "2016-05-14T14:50:47.0430442+02:00",
  "EndTime": "2016-05-14T14:50:47.0430442+02:00"
}

*/
                                                                                                                     
$ch = curl_init('http://88.200.23.139/Crea.Ultimus.Api/api/Process/Nabava/launch');                                                                      
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

<p>Hello world</p>