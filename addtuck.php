<?php
header('Location:tuck.php');
array_map("htmlspecialchars", $_POST);
include_once("connection.php"); 

print_r($_POST);
$stmt = $conn->prepare("INSERT INTO Tbltuck (TuckID,Name,Cost,Quantity)VALUES (null,:name,:cost,:quantity)");

$stmt->bindParam(':forename', $_POST["Forename"]);
$stmt->bindParam(':surname', $_POST["Surname"]);
$stmt->bindParam(':wallet', $_POST["Wallet"]);

                                         
$stmt->bindParam(':password', $_POST["Password"]);

$stmt->bindParam(':role', $role);
$stmt->execute();
$conn=null;

print_r($_POST);



?>