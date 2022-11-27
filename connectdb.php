<?php 
    $hostname="localhost";
    $username="root";
    $password="";
    $dbname="crud_operation_php";

    $connect=mysqli_connect($hostname,$username,$password,$dbname);

    if(!$connect){
        echo die(mysqli_error($connect));
    }
?>