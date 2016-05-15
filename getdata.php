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

if ($user == "user1"){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "crea0\\"."user4".":".$pass);  
    curl_setopt($ch, CURLOPT_URL, $url);
    $result4 = curl_exec($ch);
    curl_close($ch);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "crea0\\"."user2".":".$pass);  
    curl_setopt($ch, CURLOPT_URL, $url);
    $result2 = curl_exec($ch);
    curl_close($ch);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "crea0\\"."user3".":".$pass);  
    curl_setopt($ch, CURLOPT_URL, $url);
    $result3 = curl_exec($ch);
    curl_close($ch);
}
else if ($user == "user2"){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "crea0\\"."user3".":".$pass);  
    curl_setopt($ch, CURLOPT_URL, $url);
    $result3 = curl_exec($ch);
    curl_close($ch);
}

//echo $obj;
/*foreach ($obj as $value) {
    echo "<p>".$value['Id']."<p>";
    echo "  ";
}*/

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">
    <link rel="stylesheet" href="css/custom.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.html">Dragonhack 2016</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="users.html">Users</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <section class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Podroben pogled: <?php echo $user ?> </h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
<<<<<<< HEAD
                <div class="container">
                    <h2>Moje naloge</h2>
                    <table class="table">
                        <thead>
                            <tr>
                              <th>Id</th>
                              <th>Incident number</th>
                              <th>Task name</th>
                              <th>Confirm</th>
                              <th>Reject</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if(sizeof($obj) > 0){
                                foreach ($obj as $value) {
                                    echo "<tr>";
                                    echo "<td>".$value['Id']."</td>";
                                    echo "<td>".$value['IncidentNumber']."</td>";
                                    echo "<td>".$value['StepName']."</td>";
                                    echo "<td><a href='confirm.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Confirm</a></td>";
                                    echo "<td><a href='reject.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Reject</a></td>";
                                    echo "</tr>";
                                }
                            }
                            else {
                                echo "<tr><td colspan=\"5\" style=\"width:100%\" align=\"center\">No tasks</td></tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            echo "</br>";
                            if ($user == "user1"){
                                echo "<h2>User's 4 tasks</h2>";
                                echo "<table class='table'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>Id</th>";
                                echo "<th>Incident number</th>";
                                echo "<th>Task name</th>";
                                echo "<th>Confirm</th>";
                                echo "<th>Reject</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $obj4 = json_decode($result4, true);
                                if(sizeof($obj4) > 0){
                                    foreach ($obj4 as $value) {
                                        echo "<tr>";
                                        echo "<td>".$value['Id']."</td>";
                                        echo "<td>".$value['IncidentNumber']."</td>";
                                        echo "<td>".$value['StepName']."</td>";
                                        echo "<td><a href='confirm.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Confirm</a></td>";
                                        echo "<td><a href='reject.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Reject</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan=\"5\" style=\"width:100%\" align=\"center\">No tasks</td></tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                                echo "</br>";
                                echo "<h2>User's 2 tasks</h2>";
                                echo "<table class='table'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>Id</th>";
                                echo "<th>Incident number</th>";
                                echo "<th>Task name</th>";
                                echo "<th>Confirm</th>";
                                echo "<th>Reject</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $obj2 = json_decode($result2, true);
                                if(sizeof($obj2) > 0){
                                    foreach ($obj2 as $value) {
                                        echo "<tr>";
                                        echo "<td>".$value['Id']."</td>";
                                        echo "<td>".$value['IncidentNumber']."</td>";
                                        echo "<td>".$value['StepName']."</td>";
                                        echo "<td><a href='confirm.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Confirm</a></td>";
                                        echo "<td><a href='reject.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Reject</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan=\"5\" style=\"width:100%\" align=\"center\">No tasks</td></tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                                echo "</br>";
                                echo "<h2>User's 3 tasks</h2>";
                                echo "<table class='table'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>Id</th>";
                                echo "<th>Incident number</th>";
                                echo "<th>Task name</th>";
                                echo "<th>Confirm</th>";
                                echo "<th>Reject</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $obj3 = json_decode($result3, true);
                                if(sizeof($obj3) > 0){
                                    foreach ($obj3 as $value) { 
                                        echo "<tr>";
                                        echo "<td>".$value['Id']."</td>";
                                        echo "<td>".$value['IncidentNumber']."</td>";
                                        echo "<td>".$value['StepName']."</td>";
                                        echo "<td><a href='confirm.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Confirm</a></td>";
                                        echo "<td><a href='reject.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Reject</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan=\"5\" style=\"width:100%\" align=\"center\">No tasks</td></tr>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                                echo "</br>";
                            }
                            else if ($user == "user2") {
                                echo "<h2>User's 3 tasks</h2>";
                                echo "<table class='table'>";
                                echo "<thead>";
                                echo "<tr>";
                                echo "<th>Id</th>";
                                echo "<th>Incident number</th>";
                                echo "<th>Task name</th>";
                                echo "<th>Confirm</th>";
                                echo "<th>Reject</th>";
                                echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                $obj3 = json_decode($result3, true);
                                if(sizeof($obj3) > 0){
                                    foreach ($obj3 as $value) { 
                                        echo "<tr>";
                                        echo "<td>".$value['Id']."</td>";
                                        echo "<td>".$value['IncidentNumber']."</td>";
                                        echo "<td>".$value['StepName']."</td>";
                                        echo "<td><a href='confirm.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Confirm</a></td>";
                                        echo "<td><a href='reject.php?user=".$user."&id=".$value['Id']."&inci=".$value['IncidentNumber']."&step=".$value['StepName']."'". ">Reject</a></td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<p>No Task</p>";
                                }
                                echo "</tbody>";
                                echo "</table>";
                                echo "</br>";
                            }
                                                    
                            ?>
                    </table>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-6789</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
