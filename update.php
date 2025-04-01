<?php
include 'db.php';
$id = $_GET['id'];
$name = $_POST['name'] ?? '';
if ($name) {
    $conn->query("UPDATE users SET name='$name' WHERE id=$id");
    header("Location: index.php");
}
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$user = $result->fetch_assoc();
?>
<form action="update.php?id=<?php echo $id; ?>" method="POST">
    <input type="text" name="name" value="<?php echo $user['name']; ?>">
    <button type="submit">Update</button>
</form>