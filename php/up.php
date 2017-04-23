<?php
include 'dph.php';
session_start();



if($_SESSION['userid'])
{
        $userid = $_SESSION['userid'];
        $fname = $_POST ['fname'];
       $pwd = $_POST ['pwd'];
        $mail = $_POST ['mail'];

    $sql = "UPDATE userdatabase SET fname='$fname', pwd='$pwd', mail='$mail',activation=1 WHERE userid='$userid'";
    $result = $conn->query($sql);
    header ("location: login.php");
}
/*
$sql = "INSERT INTO userdatabase (userid,fname,pwd,mail)
VALUES ('$userid','$fname','$pwd','$mail') ";
$result = $conn->query($sql);
header ("location: login.php");
*/
