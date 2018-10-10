<?php 


class QueryBuilder 
{
    public function __construct(PDO $pdo)
    {
        $this->pdo=$pdo;
    }


    public function index($table)
    {
    $statement= $this->pdo->prepare("SELECT * FROM {$table}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
    }


    public function searchId($table, $id)
    {
    $statement= $this->pdo->prepare("SELECT * FROM {$table} WHERE id = {$id}");
    $statement->execute();
    return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}