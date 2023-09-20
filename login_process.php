<?php
require_once('db_connect.php');
require_once('clase\User.php');

$db = new DbConnection();
$user = new User($db);/// ne trebuie $db sa avem obiectul $conn

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($user->login($username, $password)) {
        header('Location: calendar.php');
        exit();
    } else {
        $error = "Invalid username or password.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Process</title>
</head>
<body>
    <?php if (isset($error)) { echo $error; } ?>
</body>
</html>
