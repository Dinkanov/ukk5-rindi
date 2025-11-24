<?php

$password = 'superadmin';

$hash =password_hash($password, PASSWORD_DEFAULT);

echo "password: " . $password . "<br>";
echo "Hash: " . $hash;
?>