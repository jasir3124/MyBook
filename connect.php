<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = "mybook";

    $conn = mysqli_connect($host, $username, $password, $dbName);


    $query = "SELECT * FROM users";

    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
?>

