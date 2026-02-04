<?php
// WARNING: This application is intentionally vulnerable for educational purposes only.

$conn = new mysqli("localhost", "wafuser", "wafpass", "waflab");

if ($conn->connect_error) {
    die("Database connection failed");
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Vulnerable SQL query (no input validation)
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<h2>Login Successful</h2>";
    } else {
        echo "<h2>Login Failed</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vulnerable Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>
