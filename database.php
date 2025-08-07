<?php
$servername = "localhost";
$user = "root";
$pass = "";
$db_name = "shorten.db";
$conn = "";

try {
    $conn = mysqli_connect($servername, $user, $pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "not connected <br>";
}
