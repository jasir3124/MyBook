<?php




class DataBase{


    private $password = '';
    private $host = 'localhost';
    private $username = 'root';
    private $dbName = "mybook";



    function connect(){
        $conn = mysqli_connect($this->host, $this->username, $this->password, $this->dbName);
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




$DB = new DataBase();

$data = $DB->read('SELECT * FROM users');

print_r($data);
?>