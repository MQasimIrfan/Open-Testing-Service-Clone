<?php
$servername = "localhost"; 
$username = "root";
$password = ""; 
$dbname = "ots"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["aname"];
    $email = $_POST["aemail"];
    $phone = $_POST["phonumber"];
    $cnic = $_POST["acnic"];
    $subject = $_POST["asubject"];
    $message = $_POST["amessage"];

    // Insert form data into the database
    $sql = "INSERT INTO contact_messages (name, email, phone, cnic_passport, subject, message) VALUES ('$name', '$email', '$phone', '$cnic', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Message submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
