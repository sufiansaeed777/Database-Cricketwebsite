
<?php
$host = 'localhost';
$user_name = 'root';
$password_='';
$database='cricket';
$con = mysqli_connect($host,$user_name,$password_,$database);

if (!$con) {
    die("<script>alert('Connection Failed.')</script>");
}

?>