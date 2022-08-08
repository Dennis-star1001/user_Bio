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
    private $result = [];

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
        $this->myQuery = $sql;

        if ($query) {
            $this->numOfResult = @$query->num_rows;
            for ($i = 0; $i < $this->numOfResult; $i++) {
                $arr = $query->fetch_array();
                $key = array_keys($arr);
                for ($x = 0; $x < count($key); $x++) {
                    if (!is_int($key[$x])) {
                        if($this->numOfResult >= 1){
                            $this->result[$i][$key[$x]]= $arr[$key[$x]];
                        }else{
                            $this->result = "";
                        }
                    }
                }
            }
            return true;
        }else{
            array_push($this->result, $this->myConn->error);
            return false;
        }
    }


    public function getSql()
    {
        $my_Sql = $this->myQuery;
        echo $my_Sql;
    }

    public function getResult(){
        $val = $this->result;
        $this->result = 
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
        $result = 
    }


    public function saveChanges($table, $sql, $condition)
    {
        return $this->sql("UPDATE $table SET $sql WHERE $condition");
    }

    public function erase($table, $condition)
    {
        return $this->sql("DELETE FROM $table WHERE $condition");
    }
}
