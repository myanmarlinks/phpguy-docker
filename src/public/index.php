<?php

try {
    $conn = new PDO(
        "mysql:host=mysql;dbname=phpguy", 
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    $statement = $conn->prepare("SELECT * FROM students");
    $statement->execute();
    $students = $statement->fetchAll(PDO::FETCH_OBJ);
    var_dump($students);
} catch (PDOException $e) {
    echo $e->getMessage(), PHP_EOL;
}