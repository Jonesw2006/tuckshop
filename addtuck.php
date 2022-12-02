<?php
header('Location:tuck.php');
array_map("htmlspecialchars", $_POST);
include_once("connection.php"); 

print_r($_POST);
$stmt = $conn->prepare("INSERT INTO Tbltuck (TuckID,Name,Cost,Quantity)VALUES (null,:name,:cost,:quantity)");

$stmt->bindParam(':name', $_POST["tuckname"]);
$stmt->bindParam(':cost', $_POST["cost"]);
$stmt->bindParam(':quantity', $_POST["quantity"]);

                                         


$stmt->execute();
$conn=null;

print_r($_POST);



?>