<?php


//use PDO;

class Vegetables
{

    protected $vegetables = [];

    public function getCount()
    {
        return count($this->vegetables);
    }

    public function populate()
    {

        $servername = "mysql";
        $database = "docker";
        $username = "docker";
        $password = "docker";

        $veg = [];

        try {

            $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

            $sql = "SELECT * from Vegetables";

            $statement = $pdo->prepare($sql);

            $statement->execute();

            $tables = $statement->fetchAll(PDO::FETCH_NUM);

            foreach ($tables as $table) {
                array_push( $veg,  (object)  ['myProp' => $table[1]] );
            }

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $veg;

    }
}
