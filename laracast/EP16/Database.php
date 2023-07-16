<?php
// PDO need DSN -> Data source name
// connect to our database
class Database{

    public $connection;

    public function __construct($config, $username = "root", $password = "@123456@"){
        $dsn = "mysql:" . http_build_query($config["database"], "", ";");
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query){

        $statement = $this->connection->prepare($query);
        $statement->execute();


        return $statement;
    }
}

