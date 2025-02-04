
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
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $user['name']; ?></h1>
    <p>Balance: $<?php echo $user['balance']; ?></p>
    <a href="send_money.php">Send Money</a> | <a href="receive_money.php">Receive Money</a> | <a href="profile.php">Profile</a>
</body>
</html>
