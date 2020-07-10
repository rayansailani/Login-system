<?php 

$servername = 'localhost';
$dBusername = 'root';
$dBpass = "";
$dBname = "loginsystem";

$conn = mysqli_connect($servername,$dBusername,$dBpass,$dBname);

if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}