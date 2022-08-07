<?php

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $databaseName = 'bio_data';


    private $myConn = '';
    private $conn = false;
    private $myQuery = "";
    private $numOfResult = "";

    function __construct()
    {
        $this->myConn = new mysqli($this->host, $this->user, $this->password, $this->databaseName);

        if ($this->myConn->connect_errno) {
            echo 'Database connection failed' . $this->myConn->connect_errno;
            $this->conn;
        } else {
            $this->conn = true;
        }
    }

    public function sql($sql)
    {
        $query = $this->myConn->query($sql);
        $this->numOfResult = @$query->num_rows;
        $this->myQuery = $sql;
    }


    public function getSql()
    {
        $my_Sql = $this->myQuery;
        echo $my_Sql;
    }

    public function numRows()
    {
        return  $this->numOfResult;
    }

    //CRUD methods
    public function save($table, $sql)
    {
        return $this->sql("INSERT INTO $table SET $sql");
    }

    public function lookUp($fields = "*", $table, $condition = "", $column)
    {
        $con =  empty($condition) ?  "" : " WHERE $condition";
        return $this->sql("SELECT $fields FROM $table $con");
    }


    public function saveChanges($table,$sql,$condition)
    {
        return $this->sql("UPDATE $table SET $sql WHERE ");
    }
}
