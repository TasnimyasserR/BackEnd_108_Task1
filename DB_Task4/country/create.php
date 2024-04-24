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
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Country_CODE']) && isset($_POST['Name']) && isset($_POST['Zone'])) {
        // Prepare and execute the insert query
        $query_insert = "INSERT INTO country(`Country_CODE`, `Name`, `Zone`) VALUES (?, ?, ?)";
        $sql = $con->prepare($query_insert);
        $res = $sql->execute([$_POST['Country_CODE'], $_POST['Name'], $_POST['Zone']]);

        if ($res) {
            echo "Record inserted successfully";
        
        } else {
            echo "Error inserting record";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
include("./table.php");
?>
