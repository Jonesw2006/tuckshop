<?php
#session_start();
#if (!isset($_SESSION['loggedinID']))
#{
#    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
#    header("Location:login.php");
#}
?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
<form action="addpupils.php" method = "post">
  Username:<input type="text" name="Username"><br>
  First name:<input type="text" name="Forename"><br>
  Last name:<input type="text" name="Surname"><br>
  Password:<input type="password" name="Password"><br>
  Balance:<input type="decimal" name="Wallet"><br>
  
  
	</select>
  <br>

  <input type="radio" name="role" value="Pupil" checked> Pupil<br>
  
  <input type="radio" name="role" value="Admin"> Admin<br>
  <input type="submit" value="Add User">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM Tblpupils");
$stmt->execute();
echo("<br>"."<br>");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["Forename"].' '.$row["Surname"].' £'.$row["Wallet"]."<br>");
}
?>

<a href="logout.php">Logout</a>
</body>
</html>
