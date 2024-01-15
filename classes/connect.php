<?php
class DataBase{

    private $password = 'root';
    private $host = 'localhost';
    private $username = 'root';
    private $dbName = "mybook";



function connect(){
    $conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbName);

    if (mysqli_connect_errno()) {
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}


    function read($query){
        $conn = $this->connect();

        $result = mysqli_query($conn, $query);

        if($result == false){
            return false;
        } else{
            $data = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
            return $data;
        }
    }

    function save($query){
        $conn = $this->connect();

        $result = mysqli_query($conn, $query);

        if($result == false){
            return false;
        } else{
            return true;
        }
    }
}