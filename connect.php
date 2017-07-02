<?php

require_once 'login.php';
$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die ($conn->connect_error);

$query = "SELECT * FROM phonecases";
$result = $conn->query($query);
if (!$result) die($conn->error);

$rows = $result->num_rows;

for($j = 0 ; $j < $rows ; ++$j)
{
	$result->data_seek($j);
	echo 'AnimeCase ID: '   . $result->fetch_assoc()['AnimeCaseID'] . '<br>';
	
	$result->data_seek($j);
	echo 'Phone Type: '   . $result->fetch_assoc()['PhoneType'] . '<br>';	

	$result->data_seek($j);
	echo 'Case Name: '   . $result->fetch_assoc()['CaseName'] . '<br>';	

	$result->data_seek($j);
	echo 'Tags: '   . $result->fetch_assoc()['Tags'] . '<br>';	

	$result->data_seek($j);
	echo 'isGame: '   . $result->fetch_assoc()['isGame'] . '<br>';

		$result->data_seek($j);
	echo 'isAnime: '   . $result->fetch_assoc()['isAnime'] . '<br>';

		$result->data_seek($j);
	echo 'Primary Color: '   . $result->fetch_assoc()['PrimaryColor'] . '<br><br>';
}

?>