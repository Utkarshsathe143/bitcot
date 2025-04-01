<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $sql = "INSERT INTO users (name) VALUES ('$name')";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD App</title>
</head>
<body>
    <h2>Users List</h2>
    <form action="index.php" method="POST">
        <input type="text" name="name" required>
        <button type="submit">Add User</button>
    </form>
    <ul>
        <?php while ($row = $result->fetch_assoc()): ?>
            <li>
                <?php echo $row['name']; ?>
                <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>