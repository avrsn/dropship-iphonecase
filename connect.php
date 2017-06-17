<?php

require_once 'login.php';
$connection = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die ($conn->connect_error);


$query = "SELECT * FROM products";
$result = $conn->query($query);
if (!result) die($conn->error);

?>