<?php
include 'dph.php';
session_start();
$fname = $_POST ['fname'];
$pwd = $_POST ['pwd'];
$mail = $_POST ['mail'];


if(isset($_SESSION['userid']))
{
    $sql = "UPDATE userdatabase SET fname='$fname', pwd='$pwd', mail='$mail' WHERE userid='$userid' ";
    $result = $conn->query($sql);
    header ("location: login.php");
}

/*
$sql = "INSERT INTO userdatabase (userid,fname,pwd,mail)
VALUES ('$userid','$fname','$pwd','$mail') ";
$result = $conn->query($sql);
header ("location: login.php");
*/
