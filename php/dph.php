<?php
$conn = mysqli_connect("localhost","root","","akhbarlogin");
if (!$conn){
die("Connection Failed: ".mysqli_connect_error());
}
