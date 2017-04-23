<?php
include 'dph.php';
session_start();
$userid = $_POST ['userid'];
$pwd = $_POST['pwd'];




    $sql = "SELECT * FROM userdatabase WHERE userid='$userid' AND pwd='$pwd' LIMIT 1";


    $result = $conn->query($sql);
$row = $result->fetch_assoc();
    if (!$row){
            header ("location: loginfirstx.php");
        }
else{

           $_SESSION['userid']=$userid;
       $_SESSION['activation'] = $row['activation'];
        header ("location: table.php");
    }
