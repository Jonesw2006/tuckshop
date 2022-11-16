<!DOCTYPE html>
<html>
<head>
    
    <title>Page title</title>
    
</head>
<body>
<form action="addpupils.php" method = "post">
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
</body>
</html>
