<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    $conn->query($sql);
}
header("Location: index.php");
?>


