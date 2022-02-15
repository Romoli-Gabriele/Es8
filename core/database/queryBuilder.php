<?php
class queryBuilder
{
    public $pdo;
    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    function selectAll($table, String $intoClass)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
    function insertFilm($table, $film){
        $sql = "insert into {$table} (titolo, valutazione) values ( '{$film['titolo']}' , {$film['valutazione']})";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }
    function execute($sql){
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }

}