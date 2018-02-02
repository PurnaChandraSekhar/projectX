<?php
   
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "db_voting_system";

    $conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);
    
    if(!$conn)
    {
    	echo "conection errr";
    	exit;
    }