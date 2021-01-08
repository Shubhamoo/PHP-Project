<?php
$server="localhost";
$username="root";
$password="";
$dbname="imgup";
$con=mysqli_connect($server,$username,$password,$dbname);
if(!$con){
    die("connection faild :".mysqli_connect_error());
}
else{
    echo " <h1>success </h1>";
}
?>