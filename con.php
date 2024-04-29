<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "ssm";
$con = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
