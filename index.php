<?php
include 'db.php';

echo "<h2>Hello, World! 🌍</h2>";

if ($conn) {
    echo "<p>Connected to MySQL Database Successfully!</p>";
} else {
    echo "<p>Database connection failed.</p>";
}
?>
