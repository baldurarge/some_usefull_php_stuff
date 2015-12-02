<?php

$kt = $_POST['kennitala'];
$fname = $_POST['fName'];
$lname = $_POST['lName'];
$email = $_POST['email'];
$simi = $_POST['simi'];
$heimili = $_POST['heimili'];
$pdo = require_once('dbconfig.php');


echo $kt." ".$fname." ".$lname." ".$email." ".$simi." ".$heimili;

    $sth=$PDO->prepare("INSERT INTO info (Kennitala, Fname, Lname, email, simi, heimili) VALUES (:kt,:fname,:lname,:email,:simi,:heimili)");
    $sth->execute(array(
        "kt" => $kt,
        "fname" => $fname,
        "lname" => $lname,
        "email" => $email,
        "simi" => $simi,
        "heimili" => $heimili
    ));
