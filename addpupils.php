
<?php
header('Location:pupils.php');
array_map("htmlspecialchars", $_POST);
include_once("connection.php"); 
switch($_POST["role"]){
	case "Pupil":
		$role=0;
		break;
	case "Admin":
		$role=1;
		break;
	}

$stmt = $conn->prepare("INSERT INTO TblPupils (UserID,Surname,Forename,Password,Role)VALUES (null,:surname,:forename,:password,:role)");

$stmt->bindParam(':forename', $_POST["forename"]);
$stmt->bindParam(':surname', $_POST["surname"]);

                                         
$stmt->bindParam(':password', $_POST["password"]);

$stmt->bindParam(':role', $role);
$stmt->execute();
$conn=null;

print_r($_POST);

echo $_POST["forename"]."<br>";
echo $_POST["surname"]."<br>";

echo $_POST["password"]."<br>";
echo $_POST["role"]."<br>";
?>
