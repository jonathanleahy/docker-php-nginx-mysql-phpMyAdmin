<?php

namespace App;

use PDO;

class Vegetables
{
    public function show()
    {
        //=========================================
        $servername = "mysql";
        $database = "docker";
        $username = "docker";
        $password = "docker";

        try {

            $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
            echo("Connection Okay");

            //Our SQL statement, which will select a list of tables from the current MySQL database.
            $sql = "SELECT * from vegetables";

            //Prepare our SQL statement,
            $statement = $pdo->prepare($sql);

            //Execute the statement.
            $statement->execute();

            //Fetch the rows from our statement.
            $tables = $statement->fetchAll(PDO::FETCH_NUM);

            //Loop through our table names.
            foreach ($tables as $table) {
                //Print the table name out onto the page.
                echo $table[1], '<br>';
            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
//=========================================

        return "veg";
    }
}
