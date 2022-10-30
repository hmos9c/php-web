<?php
session_start();

if($_SESSION['login'] != true){
    header('Location: /session/15-login.php');
    exit();
}

$say = "Hello " . $_SESSION['username'];
?>

<html>
<body>
<h1><?= $say ?></h1>
<a href="/session/17-logout.php">Logout</a>
</body>
</html>