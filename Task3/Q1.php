<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <form method="get">
         name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>

    <?php
   
    if (isset($_GET['name'])) {
        $name = $_GET['name'];
        echo "Hello, " . $name;
    }
    ?>
</body>
</html>
