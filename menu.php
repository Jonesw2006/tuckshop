<?php
session_start();
if (!isset($_SESSION['loggedinID']))
{
    $_SESSION['backURL'] = $_SERVER['REQUEST_URI'];
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html>
<title>Pupils</title>
    
</head>
<body>
   <h1>MENU</h1>
<?php



if ($_SESSION["Role"]==1){
    echo("Admin Functions <br>");
    echo ('<a href="tuck.php">Add Tuck</a><br>');
    echo('<a href="pupil.php">Add pupil</a><br><br>');
}
?>
    <a href="buystuff.php">Create order</a><br>
    <a href="vieworders.php">View orders</a><br>
    <a href="Statspupils.php">View Total purchases</a><br>
    <a href="logout.php">Log out</a>
</body>
</html>
