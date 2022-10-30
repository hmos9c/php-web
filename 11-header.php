<?php

header('Application: Belajar PHP Web');
header('Author: Sanas Febriyan');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";