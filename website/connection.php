<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "afrika"; 

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("fail to connect!");
}