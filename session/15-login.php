<?php
session_start();

if($_SESSION['login'] == true){
    header('Location: /session/16-member.php');
    exit();
}

$error = "";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['username'] == "sanas" && $_POST['password'] == 'sanas'){
        // sukses
        $_SESSION['login'] = true;
        $_SESSION['username'] = 'sanas';
        header('Location: /session/16-member.php');
        exit();
    }else{
        // gagal
        $error = "Login Gagal";
    }
}

?>

<html>
<body>
<?php if($error != ""){ ?>
    <h2><?= $error ?></h2>
<?php } ?>
<h1>Login</h1>
<form action="/session/15-login.php" method="post">
    <label>Username :
        <input type="text" name="username">
    </label>
    <br/>
    <label>Password :
        <input type="password" name="password">
    </label>
    <br/>
    <input type="submit" value="Login">
</form>
</body>
</html>
