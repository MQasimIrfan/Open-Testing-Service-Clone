<?php
// Assuming your MySQL database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ots";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$applicant_cnic = $_POST['applicant_cnic'];
$sql = "SELECT Status FROM application WHERE CNIC = '$applicant_cnic'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $status = $row['Status'];
    echo "Status: $status";
} else {
    echo "Not Registered";
}
$conn->close();
?>
