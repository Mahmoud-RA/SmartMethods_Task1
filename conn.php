<?php
$whitelist = array(
    '127.0.0.1',
    '::1'
);
    
if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "smartmethods";
} 
else {
    $host = getenv('MYSQLCONNSTR_HOST');
    $password = getenv('MYSQLCONNSTR_PASSWORD');
    $username = getenv('MYSQLCONNSTR_USERNAME');
    $db_name = 'smartmethods';
}

//Initializes MySQLi
$conn = mysqli_init();

// Establish the connection
mysqli_real_connect($conn, $host, $username, $password , $db_name , 3306, NULL, MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT);

//If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>