<?php
session_start();
// $username=$_SESSION['username'];
// session_unset($username);
session_destroy();

header("location: login.php");

?>