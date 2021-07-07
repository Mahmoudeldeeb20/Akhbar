<?php
include 'dph.php';

session_start();
$userid = $_POST ['userid'];

$sql = "SELECT * FROM userdatabase WHERE userid='$userid' LIMIT 1";
$result = $conn->query($sql);
$row = $result->fetch_assoc()
if (!$row){
    header ("location: loginfirstx.php");
}
else{
    $_SESSION['userid']=$userid;
    if ($row['activation'] == 0) {
        header ("location: signup.php");
    } else {
           // put the login page here
    }
    
}
