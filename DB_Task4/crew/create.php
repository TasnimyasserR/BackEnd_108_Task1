<?php
// Define database connection parameters
$db_host = "localhost";
$db_name = "airport";
$db_user = "root";
$db_pass = "";

// Connect to the database
try {
    $con = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error reporting

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Position']) && isset($_POST['Name'])
    && isset($_POST['Age']) && isset($_POST['Airline'])) {
        // Prepare and execute the insert query
        $query_insert = "INSERT INTO crew (Position, Name, Age, Airline) VALUES (?, ?,?,?)";
        $sql = $con->prepare($query_insert);
        $res = $sql->execute([$_POST['Position'], $_POST['Name'], $_POST['Age'], $_POST['Airline']]);

        if ($res) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
include("../crew/table.php");
?>
