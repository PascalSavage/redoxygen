<?php

$user = $_GET["user"];
$pass = "P@ssword";
$url = "http://88.200.23.139/Crea.Ultimus.Api/api/Process/Nabava/";

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, "crea0\\".$user.":".$pass);  
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result, true);
echo $obj;
foreach ($obj as $value) {
    echo "<p>".$value['Id']."<p>";
    echo "  ";
}

?>