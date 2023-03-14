<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="blood";
    if(! $con=mysqli_connect($servername,$username,$password,$dbname))
    {
        die("could not connect to the my sql server");
    }
    
?>