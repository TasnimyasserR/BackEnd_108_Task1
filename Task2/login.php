<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        Email: <input type="email" name="email"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" name="login" value="Login">
    </form>

    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Retrieve user information from cookies
        $name = $_COOKIE['name'];
        $savedEmail = $_COOKIE['email'];
        $savedPassword = $_COOKIE['password'];

        // Check if email and password match
        if ($savedEmail === $email && $savedPassword === $password) {
            echo "Hello, " . $name;
        } else {
            echo "Invalid email or password";
        }
    }
    ?>
</body>
</html>
