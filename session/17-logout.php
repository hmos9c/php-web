<?php
session_start();
session_destroy();

header('Location: /session/15-login.php');
exit();
