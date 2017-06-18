<?php

$query = "SELECT * FROM products";
$result = $conn->query($query);
if (!result) die($conn->error);

?>