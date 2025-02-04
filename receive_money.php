<?php
session_start();
include('db.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receive Money</title>
</head>
<body>
    <h1>Receive Money</h1>
    <p>Your email: <?php echo $user['email']; ?></p>
    <p>Balance: $<?php echo $user['balance']; ?></p>
</body>
</html>
