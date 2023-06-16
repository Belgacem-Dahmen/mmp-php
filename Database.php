<?php



class Database
{
    public $connection;



    public function __construct($config)
    {   //generate data string from config array with a ; separator 
        $dsn = "mysql:" . http_build_query($config, '', ";");
        //instance du classe pdo 
        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {
        //prepare the request
        $statment = $this->connection->prepare($query);
        //execute the request
        $statment->execute();
        //fetch and return the data
        return $statment;
    }

    public function gethOne($statment)
    {
        $data = $statment->fetch(PDO::FETCH_ASSOC);
        return  $data;
    }

    public function getAll($statment)
    {

        $data = $statment->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
