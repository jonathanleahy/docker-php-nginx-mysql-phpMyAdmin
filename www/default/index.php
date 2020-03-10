<?php

use MiladRahimi\PhpRouter\Router;

require_once('./vendor/autoload.php');


$router = new Router();

$router->get('/', function () {
    return '<p>This is homepag1e</p>';
});

$router->get('/t', function () {
    return '<p>This is /t route</p>';
});

$router->dispatch();

//=========================================
$servername = "mysql";
$database = "docker";
$username = "docker";
$password = "docker";

try {

    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    echo("Connection Okay");
    
//Our SQL statement, which will select a list of tables from the current MySQL database.
    $sql = "SHOW TABLES";

//Prepare our SQL statement,
    $statement = $pdo->prepare($sql);

//Execute the statement.
    $statement->execute();

//Fetch the rows from our statement.
    $tables = $statement->fetchAll(PDO::FETCH_NUM);

//Loop through our table names.
    foreach($tables as $table){
        //Print the table name out onto the page.
        echo $table[0], '<br>';
    }

    //    // sql to create table
//    $sql = "CREATE TABLE MyGuests (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    firstname VARCHAR(30) NOT NULL,
//    lastname VARCHAR(30) NOT NULL,
//    email VARCHAR(50),
//    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//    )";
//
//    // use exec() because no results are returned
//    $pdo->exec($sql);
//
//    return $pdo;

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
//=========================================

