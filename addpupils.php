
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
print_r($_POST);
$hashed_password = password_hash($_POST["Password"], PASSWORD_DEFAULT);
$stmt = $conn->prepare("INSERT INTO TblPupils (UserID,Username,Surname,Forename,Password,Wallet ,Role)VALUES (null,:username,:surname,:forename,:password,:wallet,:role)");

$stmt->bindParam(':forename', $_POST["Forename"]);
$stmt->bindParam(':surname', $_POST["Surname"]);
$stmt->bindParam(':wallet', $_POST["Wallet"]);
$stmt->bindParam(':username', $_POST["Username"]);

                                         
$stmt->bindParam(':password', $hashed_password);

$stmt->bindParam(':role', $role);
$stmt->execute();
$conn=null;

print_r($_POST);

echo $_POST["Forename"]."<br>";
echo $_POST["Surname"]."<br>";
echo $_POST["Wallet"]."<br>";

echo $_POST["Password"]."<br>";

?>
