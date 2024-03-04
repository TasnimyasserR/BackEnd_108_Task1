<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
    Name <input type="text" name="name"> <br>
    email <input type="email" name="email"> <br>
    password <input type="password" name="password"> <br>
    <input type="submit" name="submit">
    
    
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Set cookies with user information
        setcookie('name', $name);
        setcookie('email', $email);
        setcookie('password', $password);

       
    }
    ?>
</body>
</html>