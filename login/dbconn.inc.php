<?php

$servername = "localhost";
$dbUsername = "root";
$dbPassword = "Malonasima01";
$dbName = "stchr";

$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if (!conn){
    die("connection failed: ".mysqli_connect_error());
}