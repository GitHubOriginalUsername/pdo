<?php


$host = 'localhost';
$user = 'root';
$password = '123456';
$dbname = 'pdoposts';

//Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

//Create a PDO Instance
$pdo = new PDO($dsn, $user, $password);

#PDO QUERY

$stmt = $pdo->query('SELECT * FROM posts');

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo $row['titile'] . '<br>';
}

