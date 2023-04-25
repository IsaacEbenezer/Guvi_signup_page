
<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "guvi_login";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die("Connection error" . $mysqli->connect_error);
}

return $mysqli;