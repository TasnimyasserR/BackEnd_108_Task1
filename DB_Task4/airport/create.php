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
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Airport_name']) && isset($_POST['Country'])) {
        // Prepare and execute the insert query
        $query_insert = "INSERT INTO airport (Airport_name, Country) VALUES (?, ?)";
        $sql = $con->prepare($query_insert);
        $res = $sql->execute([$_POST['Airport_name'], $_POST['Country']]);

        if ($res) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
include("../airport/table.php");
?>
