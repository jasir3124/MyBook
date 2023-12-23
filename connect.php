<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbName = "mybook";

    $conn = mysqli_connect($host, $username, $password, $dbName);

    $firstName = "Jasir";
    $lastName = "Limani";

    $query = "INSERT INTO users (firstName, lastName)  VALUES ('$firstName', '$lastName')";

    mysqli_query($conn, $query);
?>