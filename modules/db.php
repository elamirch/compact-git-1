<?php
$db_name = "test_1";

$db_user = "mehdi";
$db_pass = "mamkenixim";

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_PERSISTENT, True);