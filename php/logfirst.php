<?php
include 'dph.php';
session_start();

$userid = $_POST ['userid'];

$sql = "SELECT * FROM userdatabase WHERE userid='$userid'";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()){
    header ("location: loginfirstx.php");
}
else{
    $_SESSION['userid']=$userid;
    header ("location: signup.php");
}
