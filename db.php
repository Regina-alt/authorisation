<?php
//Подключение к БД
try{
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
} catch (\PDOException $exception) {
    echo "Error database connect<br>";
    echo "Message: {$exception -> getMessage()}";
    die();
}
?>