<?php
include 'C:\wamp64\www\2\person\database.php';

$id = $_GET['user_id'];


if ($sql = $conn->prepare("DELETE FROM user WHERE id = ?")) {
	
	$sql->bind_param("i", $id);
    $sql->execute();
	
    echo "Brugeren er slettet";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header( "location: http://localhost/2/personer.php" );
?>