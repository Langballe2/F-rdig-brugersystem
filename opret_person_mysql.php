<?php
include 'C:\wamp64\www\2\person\database.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$cpr = $_POST['cpr'];

if ($sql = $conn->prepare("INSERT INTO user (firstname, lastname, cpr) VALUES (?,?,?)")) {
    $sql->bind_param("sss", $firstname, $lastname, $cpr);
    $sql->execute();
    echo "Bruger oprettet";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: http://localhost/2/personer.php");
?>