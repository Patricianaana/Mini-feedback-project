
<?php
//database connection

define('DB_HOST', 'localhost');
define('DB_USER','naana');
define('DB_PASS', '12345678');
define('DB_NAME', 'feedback_proj');

//create a database connection
$conn = new mysqli(DB_HOST, DB_USER,DB_PASS, DB_NAME);


//check connection
if($conn->connect_error){
    die('Connection Failed' . $conn->connect_error);
}
// echo 'CONNECTED!';

