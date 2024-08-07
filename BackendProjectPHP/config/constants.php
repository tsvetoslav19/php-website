<?php 
    //Start Session
    session_start();

    //Constants to Store Non Repeating Values
    define('SITEURL', 'http://localhost/food-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'outlook19');
    define('DB_NAME', 'food-order');
    
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error($conn)); //DB Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error($conn)); //Selecting DB

?>