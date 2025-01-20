<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "ots"; 
$connection = new mysqli($servername, $username, $password, $dbname);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cnic = $_POST['aLoginCnic'];
    $password = $_POST['aLoginPassword'];

    $sql = "INSERT INTO users (cnic, password) VALUES ('$cnic', '$password')";

    if ($connection->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
$connection->close();
?>
