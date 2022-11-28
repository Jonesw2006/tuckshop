<?php
session_start();
if (!isset($_SESSION['loggedinID']))
{
    $_SESSION['backURL'] = $_SERVER['REQUESTURI']
    header("Location:login.php");
}
?>

<a href="logout.php">Logout</a>