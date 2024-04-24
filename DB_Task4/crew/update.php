<?php

// Define database connection parameters
$db_host = "localhost";
$db_name = "airport";
$db_user = "root";
$db_pass = "";

try {
    // Connect to the database
    $con = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error reporting

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Prepare and execute the update query
        $query_insert = "UPDATE crew SET `Position`=:Position,`Name`=:name, `Age`=:Age, `Airline`=:Airline, WHERE id = $_POST[id]";
        $sql = $con->prepare($query_insert);
        $sql->bindParam(':Position', $_POST['Position']);
        $sql->bindParam(':Name', $_POST['Name']);
        $sql->bindParam(':Age', $_POST['Age']);
        $sql->bindParam(':Airline', $_POST['Airline']);
        $res = $sql->execute();

        if ($res) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record";
        }
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
