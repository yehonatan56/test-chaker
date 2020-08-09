<?php

class TodoServer {

    private $servername = 'localhost';
        private $username = 'id12238239_jonswa';
    private $password = 'cnCNpR[ZR5rX)@\O';
    private $dbName = 'id12238239_testy';
    public $connection;
    
    function __construct() {
        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbName);
//header('Content-Type: application/json');
    } 

    function getAllTodos() {
        $sql = "UPDATE howmeny SET count = count + 1 WHERE address = ";
        $result = $this->connection->query($sql);

        $dataRows = array();

   
}


}
?>