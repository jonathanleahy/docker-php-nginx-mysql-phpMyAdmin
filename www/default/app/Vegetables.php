<?php

namespace App;

use PDO;

class Vegetables
{
    public function populate()
    {

        $servername = "mysql";
        $database = "docker";
        $username = "docker";
        $password = "docker";

        $veg = [];

        try {

            $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

            $sql = "SELECT * from vegetables";

            $statement = $pdo->prepare($sql);

            $statement->execute();

            $tables = $statement->fetchAll(PDO::FETCH_NUM);

            foreach ($tables as $table) {
                array_push( $veg,  (object)  ['myProp' => $table[1]] );
            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        array_push( $veg, "a");

        return $veg;

    }
}
