<?php
$password = 'password1';
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
echo $hashedPassword;