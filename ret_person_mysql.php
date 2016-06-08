<?php
include 'C:\wamp64\www\2\person\database.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$cpr = $_POST['cpr'];
$id = $_POST['id'];

if ($sql = $conn->prepare("UPDATE user SET firstname = '$firstname', lastname = '$lastname', cpr = '$cpr' WHERE id = ?")) {
	$sql->bind_param("s", $id);
    $sql->execute();
    echo "Brugeren er rettet";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header( "location: http://localhost/2/personer.php" );
?>