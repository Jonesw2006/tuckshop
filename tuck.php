<!DOCTYPE html>
<html>
<head>
    
    <title>Tuck</title>
    
</head>
<body>
<form action="addtuck.php" method = "post">
  Tuck name:<input type="text" name="tuckname"><br>
  Cost:<input type="decimal" name="cost"><br>
  Quantity:<input type="int" name="quantity"><br>
  Balance:<input type="decimal" name="Wallet"><br>

  <input type="submit" value="Add Tuck">
</form>
<?php
include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM TblTuck");
$stmt->execute();
echo("<br>"."<br>");
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["Tuckname"].' '.$row["Tuckdescription"].' £'.$row["Price"].' '.$row["Quantity"]"<br>");
}
?>
</body>
</html>
