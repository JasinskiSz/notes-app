<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes_app_2k_db";

$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>