<?php

$host="localhost";
$user="root";
$password="";
$dbname="Server_CitywCrime";
$link=@mysqli_connect($host,$user,$password,$dbname);



if(mysqli_connect_error())
{
    
    echo "connection failed".mysqli_connect_error();
    exit();
}

