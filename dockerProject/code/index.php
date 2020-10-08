<?php
$dns = 'mysql:host=db; port=3306';
$user = 'root';
$pwd = 'root';

try {
    $conn = new PDO($dns, $user, $pwd);
    echo 'connect success !';
} catch (PDOException $e) {
    echo 'Connect Failed', $e->getMessage();
}
?>