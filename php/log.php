<?php
include 'dph.php';

$id = $_POST ['id'];
$pwd = $_POST ['pwd'];


$sql = "SELECT * FROM userdatabase WHERE id='$id' AND pwd='$pwd'";
$result = $conn->query($sql);
if (!$row = $result->fetch_assoc()){
    header ("location: loginx.php");
}
else{
header ("location: loginy.php");
}
